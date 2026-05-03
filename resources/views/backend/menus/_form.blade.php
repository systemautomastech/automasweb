<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nestable2@1.6.0/jquery.nestable.min.css">

<div class="row">

    <!-- LEFT PANEL -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Add Menu Items</div>

            <div class="card-body">

                <h6>Custom Link</h6>

                <input type="text" id="new-title" class="form-control mb-2" placeholder="Title">
                <input type="text" id="new-url" class="form-control mb-2" placeholder="URL">

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
<script src="https://cdn.jsdelivr.net/npm/nestable2@1.6.0/jquery.nestable.min.js"></script>
<script>
    function menuItem(title = '', url = '') {
        let id = Date.now();

        return `
    <li class="dd-item" data-id="${id}">

        <div class="dd-handle d-flex justify-content-between">
            <span class="menu-title">${title || 'New Item'}</span>
            <button type="button" class="btn btn-sm btn-link toggle-item">⚙</button>
        </div>

        <div class="menu-settings p-2 border bg-light" style="display:none;">

            <input type="text" class="form-control form-control-sm mb-2 title"
                   value="${title}" placeholder="Navigation Label">

            <input type="text" class="form-control form-control-sm mb-2 url"
                   value="${url}" placeholder="URL">

            <input type="text" class="form-control form-control-sm mb-2 icon"
                   placeholder="Icon (optional)">

            <div class="form-check mb-2">
                <input type="checkbox" class="form-check-input new_tab">
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

        $('#menu-builder').nestable({
            maxDepth: 5
        });

        // Add custom item
        $('#add-custom').click(function() {

            let title = $('#new-title').val();
            let url = $('#new-url').val();

            if (!title) return alert('Title required');

            $('#menu-builder > .dd-list').append(menuItem(title, url));

            $('#new-title').val('');
            $('#new-url').val('');
        });

        // Quick add
        $(document).on('click', '.quick-add', function() {
            let title = $(this).data('title');
            let url = $(this).data('url');

            $('#menu-builder > .dd-list').append(menuItem(title, url));
        });

        // Toggle settings
        $(document).on('click', '.toggle-item', function(event) {
            event.preventDefault();
            event.stopPropagation();
            $(this).closest('.dd-item').children('.menu-settings').slideToggle();
        });

        // Update label live
        $(document).on('input', '.title', function() {
            $(this).closest('.dd-item').find('.menu-title').text($(this).val());
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

            let item = {
                title: $(this).find('> .menu-settings .title').val(),
                url: $(this).find('> .menu-settings .url').val(),
                icon: $(this).find('.icon').val(),
                new_tab: $(this).find('.new_tab').is(':checked'),
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