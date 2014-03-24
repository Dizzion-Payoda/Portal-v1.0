<style>
    .navbar-inverse .navbar-inner {
        background:#ffffff;/* Old browsers */
        /* IE9 SVG, needs conditional override of 'filter' to 'none' */
        background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjkzJSIgc3RvcC1jb2xvcj0iIzI4NGU5OSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
        background: -moz-linear-gradient(left, #ffffff 0%,<?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?> 93%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, right top, color-stop(0%,#ffffff), color-stop(93%,<?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?>)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(left, #ffffff 0%,<?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?> 93%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(left, #ffffff 0%,<?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?> 93%); /* Opera 11.10+ */
        background: -ms-linear-gradient(left, #ffffff 0%,<?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?> 93%); /* IE10+ */
        background: linear-gradient(to right, #ffffff 0%,<?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?> 93%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='<?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?>',GradientType=1 ); /* IE6-8 */
    }

    .navbar-inverse .navbar-inner .divider-vertical {
        opacity: 0.1;
        filter: alpha(opacity=10);
        border-left: 1px solid #fff;
        border-right: 1px solid #999;
    }

    .daterangepicker .ranges li,
    #sidebar-search input[type=text],
    a,
    a:hover,
    a:active,
    a:focus,
    #nav-info > li.active a,
    .error-code,
    .wizard-steps > div.active,
    .plan-featured h1,
    a.btn-theme-options:hover {
        color: <?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?>;
    }

    .fc-cell-overlay,
    .fc-state-hover,
    .fc-state-hover .fc-button-inner,
    .fc-state-down,
    .fc-state-down .fc-button-inner,
    .fc-state-active,
    .fc-state-active .fc-button-inner,
    .fc-event,
    .daterangepicker .ranges li.active,
    .daterangepicker .ranges li:hover,
    .daterangepicker td.active,
    .daterangepicker td.active:hover,
    .datepicker td.active,
    .datepicker td.active:hover,
    .datepicker td.active:hover,
    .datepicker td.active:hover:hover,
    .datepicker td.active:focus,
    .datepicker td.active:hover:focus,
    .datepicker td.active:active,
    .datepicker td.active:hover:active,
    .datepicker td.active.active,
    .datepicker td.active:hover.active,
    .datepicker td.active.disabled,
    .datepicker td.active:hover.disabled,
    .datepicker td.active[disabled],
    .datepicker td.active:hover[disabled],
    .datepicker td span.active,
    .datepicker td span.active:hover,
    .datepicker td span.active:focus,
    .datepicker td span.active:active,
    .datepicker td span.active.active,
    .datepicker td span.active.disabled,
    .datepicker td span.active[disabled],
    .datepicker td span.active:active,
    .datepicker td span.active.active,
    .bootstrap-timepicker-widget table td a:hover,
    .chzn-container .chzn-results .highlighted,
    .jqvmap-zoomin:hover, .jqvmap-zoomout:hover,
    .nav-dash > li > a:hover,
    .nav-dash > li.active > a,
    .fc-external-event,
    .plan-featured .plan-header,
    .inbox-messages-content-actions a:hover,
    .chat-messages .chat-msg-left,
    .chat-input,
    .dropdown-menu > li > a:hover,
    .dropdown-menu > li > a:focus,
    .dropdown-submenu:hover > a,
    .dropdown-submenu:focus > a,
    .dropdown-menu > .active > a,
    .dropdown-menu > .active > a:hover,
    .dropdown-menu > .active > a:focus,
    .nav-pills > .active > a,
    .nav-pills > .active > a:hover,
    .nav-pills > .active > a:focus,
    .pagination ul > .active > a,
    .pagination ul > .active > a:hover,
    .pagination ul > .active > span {
        background-color: <?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?>;
    }

    .datepicker td.active:active,
    .datepicker td.active:hover:active,
    .datepicker td.active.active,
    .datepicker td.active:hover.active {
        background-color:<?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?>;
    }

    .fc-state-hover,
    .fc-state-hover .fc-button-inner,
    .fc-state-down,
    .fc-state-down .fc-button-inner,
    .fc-state-active,
    .fc-state-active .fc-button-inner,
    .fc-event,
    #primary-nav li a.active,
    .nav-dash > li > a:hover,
    .nav-dash > li.active > a,
    .pagination ul > .active > a,
    .pagination ul > .active > a:hover,
    .pagination ul > .active > span,
    a.thumbnail:hover,
    a.thumbnail:focus {
        border-color: <?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?>;
    }

    .inbox-messages-container {
        border-left-color: <?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?>;
    }

    #inner-container {
        background: none repeat scroll 0 0 #CCCCCC;
    }
    #primary-nav li a {
        background-color: #888888;
        color: #FFFFFF;
    }
    #primary-nav li a.active
    {
        background: none repeat scroll 0 0 #555;

    }
    #primary-nav li a:hover
    {
        background:<?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?>;
    }
    .btn {
        background: none repeat scroll 0 0 <?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?> !important;
        color:#fff;
    }
    .btn.btn-secondary {
        background: none repeat scroll 0 0 #666666 !important;
    }
    .editCls img {
        background: none repeat scroll 0 0 <?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?>;
        padding: 4px;
    }
    .pagination .yiiPager > .selected > a, .pagination .yiiPager > .selected > a:hover, .pagination .yiiPager > .selected > span {
        background-color: <?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?>;
        border: 1px solid <?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?>;
        color: #FFFFFF;
    }
    .input-append .add-on, .input-prepend .add-on {
        background: none repeat scroll 0 0 <?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?>;
    }
    .fg-button.ui-button.ui-state-default.ui-state-disabled {
        background: none repeat scroll 0 0 <?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?>;
        color: #FFFFFF !important;
        opacity: 1;
    }
    .error-code {
        color: #DB4A39;
    }
    #customer-app-list.toggleMenu.scrollable-menu li:hover {
        background:<?php echo AppConstants::$THEME_COLOR_CODES[Yii::app()->session['theme']]; ?>;
    }

</style>