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
                    field: 'TYPE',
                    title: 'TYPE',
                    autoHide: false,
                    // callback function support for column rendering
                    template: function (row) {
                        var status = {
                            1: {'title': 'Enabled', 'class': 'label-light-primary', 'state': 'primary'},
                            2: {'title': 'Disabled', 'class': ' label-light-danger', 'state': 'danger'},
                        };
                        return '<span class="label label-' + status[row.TYPE].state + ' label-dot mr-2"></span><span class="font-weight-bold text-' +status[row.TYPE].state + '">' +	status[row.TYPE].title + '</span>'
                        // return '<span class="label font-weight-bold label-lg ' + status[row.TYPE].class + ' label-inline">' + status[row.TYPE].title + '</span>';
                    },
                },
                {
                    field: 'STATUS',
                    title: 'STATUS',
                    autoHide: false,
                    // callback function support for column rendering
                    template: function (row) {
                        var status = {
                            1: {'title': 'New', 'class': 'label-light-linkedin'},
                            2: {'title': 'Queued', 'class': ' label-light-info'},
                            3: {'title': 'In Progress', 'class': ' label-light-instagram'},
                            4: {'title': 'Pending', 'class': ' label-light-warning'},
                            5: {'title': 'Resolved', 'class': ' label-light-primary'},
                            6: {'title': 'Closed', 'class': ' label-light-danger'},
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

        $('#kt_datatable_search_type').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'TYPE');
        });

        $('#kt_datatable_search_status', '#kt_datatable_search_type').selectpicker();

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
