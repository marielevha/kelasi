"use strict";
// Class definition

var KTDatatableHtmlTableDemo = function () {
    // Private functions

    // demo initializer
    var demo = function () {

        var datatable = $('#kt_datatable').KTDatatable({
            data: {
                saveState: {cookie: false},
            },
            search: {
                input: $('#kt_datatable_search_query'),
                key: 'generalSearch'
            },
            columns: [
                {
                    field: '#ID',
                    title: '#ID',
                    width: 40,
                    // type
                    overflow: 'visible',
                    autoHide: false,
                },
                {
                    field: 'STATUS',
                    title: 'STATUS',
                    autoHide: false,
                    // callback function support for column rendering
                    template: function (row) {
                        var status = {
                            1: {'title': 'Enabled', 'class': 'label-light-primary'},
                            2: {'title': 'Closed', 'class': ' label-light-danger'},
                        };
                        return '<span class="label font-weight-bold label-lg ' + status[row.STATUS].class + ' label-inline">' + status[row.STATUS].title + '</span>';
                    },
                },
                {
                    field: 'ACTIONS',
                    title: 'ACTIONS',
                    sortable: false,
                    width: 100,
                    selectors: {
                        class: 'justify-content-end'
                    },
                    overflow: 'visible',
                    autoHide: false,
                }
            ],
        });

        $('#kt_datatable_search_status').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'STATUS');
        });

        $('#kt_datatable_search_status').selectpicker();

    };

    return {
        // Public functions
        init: function () {
            // init dmeo
            demo();
        },
    };
}();

jQuery(document).ready(function () {
    KTDatatableHtmlTableDemo.init();
});
