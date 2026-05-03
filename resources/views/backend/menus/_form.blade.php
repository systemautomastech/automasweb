<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nestable2@1.6.0/jquery.nestable.min.css">
<style>
    .dd-handle {
        border: none !important;
        background: none !important;
        border-radius: 0 !important;
        padding: 0 !important;
        margin: 0 !important;
        width: 100%;
    }

    .menu-item {
        display: block;
        height: 30px;
        margin: 5px 0;
        padding: 5px 10px;
        color: #333;
        text-decoration: none;
        font-weight: 700;
        border: 1px solid #ccc;
        background: #fafafa;
        border-radius: 3px;
        box-sizing: border-box;
    }

    .link-mode-field[hidden] {
        display: none !important;
    }

    .color-split {
        display: flex;
        gap: .5rem;
        align-items: center;
    }

    .color-split input[type="color"] {
        width: 3rem;
        min-width: 3rem;
        padding: 0;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        background: #fff;
    }
</style>
<div class="row">

    <!-- LEFT PANEL -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Add Menu Items</div>

            <div class="card-body">

                <h6>Custom Link</h6>

                <input type="text" id="new-title" class="form-control mb-2" placeholder="Title">
                <select id="new-link-type" class="form-control mb-2 link-type">
                    <option value="url">Direct URL</option>
                    <option value="route">Named Route</option>
                </select>
                <div class="link-mode-field mb-2" data-link-mode="url">
                    <input type="text" id="new-url" class="form-control" placeholder="URL">
                </div>
                <div class="link-mode-field mb-2" data-link-mode="route" hidden>
                    <select id="new-route" class="form-control mb-2">
                        <option value="">Select Route</option>
                    </select>
                    <input type="text" id="new-route-params" class="form-control" placeholder="Route Parameters (JSON or key=value&key2=value2)">
                </div>
                <input type="text" id="new-icon" class="form-control mb-2" placeholder="Icon (optional)">
                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="new-new-tab">
                    <label class="form-check-label" for="new-new-tab">Open in new tab</label>
                </div>
                <div class="color-split mb-2">
                    <input type="color" id="new-color-picker" value="#333333" aria-label="Text color picker">
                    <input type="text" id="new-color" class="form-control" placeholder="Text Color (optional)">
                </div>
                <div class="color-split mb-2">
                    <input type="color" id="new-bg-color-picker" value="#ffffff" aria-label="Background color picker">
                    <input type="text" id="new-bg-color" class="form-control" placeholder="Background Color (optional)">
                </div>
                <input type="text" id="new-css-class" class="form-control mb-2" placeholder="CSS Class (optional)">


                <button type="button" class="btn btn-primary w-100" id="add-custom">
                    Add to Menu
                </button>

                <hr>

                <h6>Quick Links</h6>

                <button type="button" class="btn btn-outline-secondary w-100 mb-2 quick-add" data-title="Home" data-url="/">Home</button>
                <button type="button" class="btn btn-outline-secondary w-100 mb-2 quick-add" data-title="About" data-url="/about">About</button>

            </div>
        </div>
    </div>

    <!-- RIGHT PANEL -->
    <div class="col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Menu Structure</span>
                <button type="button" class="btn btn-success btn-sm" id="save-menu">Save Menu</button>
            </div>

            <div class="card-body">
                <div class="dd" id="menu-builder">
                    <ol class="dd-list"></ol>
                </div>
            </div>
        </div>
    </div>

</div>
<textarea id="route-options-data" class="d-none">@json($routeOptions ?? [])</textarea>
<script src="https://cdn.jsdelivr.net/npm/nestable2@1.6.0/jquery.nestable.min.js"></script>
<script>
    const routeOptions = JSON.parse(document.getElementById('route-options-data').value || '[]');

    function escapeHtml(value) {
        return String(value ?? '')
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;');
    }

    function renderRouteOptions(selectedRoute) {
        return routeOptions.map(function(option) {
            const selected = option.name === selectedRoute ? 'selected' : '';
            return `<option value="${escapeHtml(option.name)}" ${selected}>${escapeHtml(option.label)}</option>`;
        }).join('');
    }

    function parseRouteParams(value) {
        const raw = String(value || '').trim();

        if (!raw) {
            return null;
        }

        try {
            const parsed = JSON.parse(raw);
            return parsed && typeof parsed === 'object' ? parsed : null;
        } catch (error) {
            // fall back to key=value parsing
        }

        const params = {};
        raw.split('&').forEach(function(pair) {
            const parts = pair.split('=');
            const key = (parts[0] || '').trim();

            if (!key) {
                return;
            }

            const paramValue = parts.length > 1 ? parts.slice(1).join('=') : '';
            params[decodeURIComponent(key)] = decodeURIComponent(paramValue.trim());
        });

        return Object.keys(params).length ? params : null;
    }

    function normalizeColor(value, fallback) {
        const raw = String(value || '').trim();

        if (!raw) {
            return fallback;
        }

        const normalized = raw.startsWith('#') ? raw : ('#' + raw.replace(/^#/, ''));
        return /^#[0-9a-fA-F]{6}$/.test(normalized) ? normalized : fallback;
    }

    function syncColorInputs($scope) {
        $scope.find('.color-split').each(function() {
            const $wrap = $(this);
            const $picker = $wrap.find('input[type="color"]');
            const $text = $wrap.find('input[type="text"]');

            $picker.off('.menuColor').on('input.menuColor change.menuColor', function() {
                $text.val($picker.val());
            });

            $text.off('.menuColor').on('input.menuColor change.menuColor', function() {
                const normalized = normalizeColor($text.val(), $picker.val());
                if (/^#[0-9a-fA-F]{6}$/.test(normalized)) {
                    $picker.val(normalized);
                }
            });
        });
    }

    function updateLinkFields($scope) {
        const mode = $scope.find('.link-type').val() || 'url';

        $scope.find('.link-mode-field').each(function() {
            const fieldMode = $(this).data('link-mode');
            $(this).prop('hidden', fieldMode !== mode);
        });
    }

    function menuItem(item = {}) {
        let id = Date.now();
        const linkType = item.link_type || (item.route ? 'route' : 'url');
        const routeParams = item.route_params && typeof item.route_params === 'object'
            ? JSON.stringify(item.route_params)
            : (item.route_params || '');
        const textColor = item.color || '';
        const bgColor = item.bg_color || '';

        return `
    <li class="dd-item" data-id="${id}">

        <div class="d-flex justify-content-between menu-item">
            <div class="dd-handle d-flex justify-content-between">
                <span class="menu-title">${escapeHtml(item.title || 'New Item')}</span>
            </div>
            <button type="button" class="btn btn-sm btn-link toggle-item">⚙</button>
        </div>

        <div class="menu-settings p-2 border bg-light" style="display:none;">

            <select class="form-control form-control-sm mb-2 link-type">
                <option value="url" ${linkType === 'url' ? 'selected' : ''}>Direct URL</option>
                <option value="route" ${linkType === 'route' ? 'selected' : ''}>Named Route</option>
            </select>

            <div class="link-mode-field mb-2" data-link-mode="url">
                <input type="text" class="form-control form-control-sm url"
                       value="${escapeHtml(item.url || '')}" placeholder="URL">
            </div>

            <div class="link-mode-field mb-2" data-link-mode="route" hidden>
                <select class="form-control form-control-sm mb-2 route">
                    <option value="">Select Route</option>
                    ${renderRouteOptions(item.route || '')}
                </select>

                <input type="text" class="form-control form-control-sm route-params"
                       value="${escapeHtml(routeParams)}" placeholder="Route Parameters (JSON or key=value&key2=value2)">
            </div>

            <input type="text" class="form-control form-control-sm mb-2 title"
                   value="${escapeHtml(item.title || '')}" placeholder="Navigation Label">

            <input type="text" class="form-control form-control-sm mb-2 icon"
                   value="${escapeHtml(item.icon || '')}" placeholder="Icon (optional)">

            <div class="color-split mb-2">
                <input type="color" class="text-color-picker" value="${normalizeColor(textColor, '#333333')}">
                <input type="text" class="form-control form-control-sm color" value="${escapeHtml(textColor)}" placeholder="Text Color (optional)">
            </div>

            <div class="color-split mb-2">
                <input type="color" class="bg-color-picker" value="${normalizeColor(bgColor, '#ffffff')}">
                <input type="text" class="form-control form-control-sm bg-color" value="${escapeHtml(bgColor)}" placeholder="Background Color (optional)">
            </div>

            <input type="text" class="form-control form-control-sm mb-2 css-class"
                   value="${escapeHtml(item.css_class || '')}" placeholder="CSS Class (optional)">

            <div class="form-check mb-2">
                <input type="checkbox" class="form-check-input new_tab" ${item.new_tab ? 'checked' : ''}>
                <label class="form-check-label">Open in new tab</label>
            </div>

            <div class="d-flex gap-2">
                <button type="button" class="btn btn-sm btn-success add-child">+ Sub</button>
                <button type="button" class="btn btn-sm btn-danger remove-item">Delete</button>
            </div>

        </div>

    </li>`;
    }
    $(function() {
        $('#new-route').html('<option value="">Select Route</option>' + renderRouteOptions(''));

        $('#menu-builder').nestable({
            maxDepth: 5
        });

        syncColorInputs($(document));
        updateLinkFields($(document));

        $(document).on('change', '.link-type', function() {
            updateLinkFields($(this).closest('.menu-settings, .card-body'));
        });

        $(document).on('input change', '.title', function() {
            $(this).closest('.dd-item').find('.menu-title').text($(this).val() || 'New Item');
        });

        // Add custom item
        $('#add-custom').click(function() {

            let title = $('#new-title').val();
            let linkType = $('#new-link-type').val() || 'url';
            let url = linkType === 'url' ? $('#new-url').val() : '';
            let route = linkType === 'route' ? $('#new-route').val() : '';

            if (!title) return alert('Title required');

            $('#menu-builder > .dd-list').append(menuItem({
                title: title,
                link_type: linkType,
                url: url,
                route: route,
                route_params: linkType === 'route' ? parseRouteParams($('#new-route-params').val()) : null,
                icon: $('#new-icon').val(),
                new_tab: $('#new-new-tab').is(':checked'),
                color: $('#new-color').val(),
                bg_color: $('#new-bg-color').val(),
                css_class: $('#new-css-class').val()
            }));

            $('#new-title').val('');
            $('#new-url').val('');
            $('#new-route').val('');
            $('#new-route-params').val('');
            $('#new-icon').val('');
            $('#new-new-tab').prop('checked', false);
            $('#new-color').val('');
            $('#new-bg-color').val('');
            $('#new-css-class').val('');
        });

        // Quick add
        $(document).on('click', '.quick-add', function() {
            let title = $(this).data('title');
            let url = $(this).data('url');

            $('#menu-builder > .dd-list').append(menuItem({ title: title, url: url, link_type: 'url' }));
        });

        // Toggle settings
        $(document).on('click', '.toggle-item', function(event) {
            event.preventDefault();
            event.stopPropagation();
            $(this).closest('.dd-item').children('.menu-settings').slideToggle();
        });

        // Add child
        $(document).on('click', '.add-child', function() {

            let parent = $(this).closest('.dd-item');
            let list = parent.children('.dd-list');

            if (!list.length) {
                list = $('<ol class="dd-list"></ol>');
                parent.append(list);
            }

            list.append(menuItem());
        });

        // Remove
        $(document).on('click', '.remove-item', function() {
            $(this).closest('.dd-item').remove();
        });

    });

    function buildMenu($list) {

        let data = [];

        $list.children('.dd-item').each(function() {

            let linkType = $(this).find('> .menu-settings .link-type').val() || 'url';

            let item = {
                title: $(this).find('> .menu-settings .title').val(),
                link_type: linkType,
                url: linkType === 'url' ? $(this).find('> .menu-settings .url').val() : null,
                route: linkType === 'route' ? $(this).find('> .menu-settings .route').val() : null,
                route_params: linkType === 'route' ? parseRouteParams($(this).find('> .menu-settings .route-params').val()) : null,
                icon: $(this).find('.icon').val(),
                new_tab: $(this).find('.new_tab').is(':checked'),
                color: $(this).find('.color').val(),
                bg_color: $(this).find('.bg-color').val(),
                css_class: $(this).find('.css-class').val(),
                children: []
            };

            let children = $(this).children('.dd-list');

            if (children.length) {
                item.children = buildMenu(children);
            }

            data.push(item);
        });

        return data;
    }

    $('#save-menu').click(function() {

        let menu = buildMenu($('#menu-builder > .dd-list'));

        console.log(menu);

        // send to Laravel
    });
</script>