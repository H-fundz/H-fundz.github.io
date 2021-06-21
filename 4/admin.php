<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>HYIP Manager Pro. Auto-payment, mass payment included.</title>
        <link href="admin.php" rel="stylesheet" type="text/css">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <style>
            .pagination {
                display: -ms-flexbox;
                display: flex;
                padding-left: 0;
                list-style: none;
            }

            .page-link {
                position: relative;
                display: block;
                padding: 0.5rem 0.75rem;
                margin-left: -1px;
                line-height: 1.25;
                color: #000;
                background-color: #fff;
                border: 1px solid #999;
            }

            .page-item:first-child .page-link {
                margin-left: 0;
                border-top-left-radius: 0.25rem;
                border-bottom-left-radius: 0.25rem;
            }

            .page-item:last-child .page-link {
                border-top-right-radius: 0.25rem;
                border-bottom-right-radius: 0.25rem;
            }

            .page-link:hover {
                z-index: 2;
                color: #000;
                text-decoration: none;
                background-color: #ccc;
                border-color: #999;
            }

            .page-link.disabled {
                color: #999;
            }

            .page-link.disabled:hover {
                background-color: #fff;
            }

            .page-link {
                cursor: pointer;
                text-decoration: none;
                color: #000;
            }

            .page-item.active .page-link {
                z-index: 1;
                color: #000;
                background-color: #ccc;
                border-color: #999;
            }

            .page-item.disabled .page-link {
                color: #666;
                pointer-events: none;
                cursor: auto;
                background-color: #fff;
                border-color: #999;
            }

            .alert {
                padding: 5px 5px 5px 15px;
                margin: 2px;
                border: solid 1px black;
                display: block;
            }

            .alert.alert-danger {
                background: #FFEEEE;
                border-color: red;
                color: #660000;
            }

            .alert.alert-warning {
                background: #FFFFEE;
                border-color: yellow;
                color: #333300;
            }

            .alert.alert-success {
                background: #EEFFEE;
                border-color: green;
                color: #006600;
            }

            .alert.alert-info {
                background: #EEEEFF;
                border-color: blue;
                color: #000066;
            }

            table.form {
                width: 100%;
            }

            table.form th {
                width: 30%;
                padding: 3px;
                padding-right: 5px;
                text-align: right;
                background: #FFC982;
                color: #493011;
            }

            table.form th.title {
                width: 100%;
                padding-left: 5px;
                text-align: left;
                color: #a45c07;
            }

            table.form td {
                width: 70%;
                padding: 3px;
                text-align: left;
                background: #FEF5EA;
            }

            table.form.nosize td {
                width: auto;
            }

            table.form.nosize th {
                width: auto;
            }

            table.form thead th {
                width: auto;
                padding: 3px;
                text-align: center;
                background: #FFC982;
                color: #FFFFFF;
            }

            table.form thead td {
                width: auto;
                padding: 3px;
                text-align: left;
            }

            table.form td input[type=text], table.form td input[type=password], table.form td textarea, table.form td select {
                width: 100%;
            }

            table.form td input[type=text].nosize, table.form td input[type=password].nosize, table.form td textarea.nosize, table.form td select.nosize {
                width: auto;
            }

            table.form.controls td {
                background: transparent;
                width: auto;
            }

            table.form.controls td input[type=text], table.form.controls td input[type=password], table.form.controls td textarea, table.form.controls td select {
                margin: 3px;
            }

            table.list {
                width: 100%;
            }

            table.list td {
                width: auto;
                padding: 3px;
            }

            table.list.sub td {
                width: auto;
                padding: 1px;
            }

            table.list th {
                width: auto;
                padding: 3px;
                text-align: center;
                background: #FFC982;
                color: #493011;
            }

            table.list .row1 {
                background: #FCE7CA;
            }

            table.list .row2 {
                background: #FFF3E3;
            }

            form input[type=submit], form input[type=button], form button, .sbmt {
                display: inline-block;
                font-weight: bold;
                text-align: center;
                text-decoration: none;
                white-space: nowrap;
                vertical-align: middle;
                user-select: none;
                border: 1px solid transparent;
                padding: .25rem .5rem;
                line-height: 1.5;
                border-radius: .2rem;
                border: none;
            }

            form input[type=submit]:hover, form input[type=button]:hover, form button:hover, .sbmt:hover {
                background-color: #FAD252;
            }

            form input[type=submit]:active, form input[type=button]:active, form button:active, .sbmt:active {
                background-color: #FFC200;
            }

            form input[type=submit]:focus, form input[type=button]:focus, form button:focus, .sbmt:focus {
                box-shadow: 0 0 0 .2rem rgba(255,236,176,.5);
            }

            form input[type=submit]:disabled, form input[type=button]:disabled, form button:disabled, .sbmt:disabled {
                opacity: .65;
            }

            .btn {
                cursor: pointer;
                text-transform: uppercase;
                margin: 1px;
            }

            .sbmt.btn-sm {
                font-size: .525rem;
                padding: .25rem .35rem;
                text-transform: uppercase;
                cursor: pointer;
                margin: 1px;
            }

            .btn-success {
                color: #fff;
                background-color: #28a745;
                border-color: #28a745;
            }

            .btn-success:hover {
                background-color: #218838 !important;
                border-color: #1e7e34 !important;
            }

            .btn-success:focus {
                background-color: #218838 !important;
                box-shadow: 0 0 0 .2rem rgba(40,167,69,.5) !important;
            }

            .btn-danger {
                color: #fff;
                background-color: #dc3545;
                border-color: #dc3545;
            }

            .btn-danger:hover {
                background-color: #c82333 !important;
                border-color: #bd2130 !important;
            }

            .btn-danger:focus {
                background-color: #c82333 !important;
                box-shadow: 0 0 0 .2rem rgba(220,53,69,.5) !important;
            }

            .btn-info {
                color: #fff;
                background-color: #17a2b8;
                border-color: #17a2b8;
            }

            .btn-info:hover {
                background-color: #138496 !important;
                border-color: #117a8b !important;
            }

            .btn-info:focus {
                background-color: #138496 !important;
                box-shadow: 0 0 0 .2rem rgba(23,162,184,.5) !important;
            }

            .btn-primary {
                color: #fff;
                background-color: #007bff;
                border-color: #007bff;
            }

            .btn-primary:hover {
                background-color: #0069d9 !important;
                border-color: #0062cc !important;
            }

            .btn-primary:focus {
                background-color: #007bff !important;
                box-shadow: 0 0 0 .2rem rgba(38,143,255,.5) !important;
            }

            .badge {
                display: inline-block;
                padding: .25em .4em;
                font-size: 75%;
                font-weight: 700;
                line-height: 1;
                text-align: center;
                /*white-space: nowrap;*/
                vertical-align: baseline;
                border-radius: .25rem;
                margin: .25em;
            }

            .badge-bg {
                display: inline-block;
                font-size: .525rem;
                padding: .25rem .35rem;
                text-transform: uppercase;
                font-weight: 700;
                text-align: center;
                /*white-space: nowrap;*/
                vertical-align: baseline;
                border-radius: .25rem;
            }

            .badge-success {
                color: #fff;
                background-color: #28a745;
            }

            .badge-info {
                color: #fff;
                background-color: #17a2b8;
            }

            .badge-danger {
                color: #fff;
                background-color: #dc3545;
            }

            .badge-warning {
                color: #212529;
                background-color: #ffc107;
            }

            .badge-primary {
                color: #fff;
                background-color: #007bff;
            }

            .badge.sticker {
                font-size: 90%;
            }

            .hide {
                display: none;
            }

            .pshead {
                padding: 3px;
                background: #FF8D00;
                margin: 2px 0;
                font-weight: bold;
                overflow: hidden;
            }

            .pshead b {
                display: block;
                width: 250px;
                float: left;
            }

            .pshead a {
                float: right;
            }

            .psettings {
                display: none;
            }
        </style>
        <style>
            .nav {
                --display: flex;
                --flex-wrap: wrap;
                padding: 0 .25rem;
                margin-bottom: 0;
                list-style: none;
            }

            .nav-link {
                border-radius: .25rem;
                display: block;
                padding: .5rem 1rem;
                color: #493011;
                text-decoration: none;
                background-color: #FFF3E3;
                border: solid 1px transparent;
                -webkit-text-decoration-skip: objects;
                margin-top: 0.2rem;
                text-align: left;
                font-weight: bold;
            }

            .nav-link:last-child {
                margin-bottom: 0.2rem;
            }

            .nav-link:hover {
                background-color: #FFC982;
            }

            .nav-link.active {
                background-color: #FFC982;
            }

            .nav-link:active, .nav-link:focus {
                background-color: #FCE7CA
            }

            .dropdown-toggle.show {
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }

            .dropdown-toggle::after {
                --display: inline-block;
                display: none;
                width: 0;
                height: 0;
                margin-left: .255em;
                vertical-align: .255em;
                content: "";
                border-top: .3em solid;
                border-right: .3em solid transparent;
                border-bottom: 0;
                border-left: .3em solid transparent;
                z-index: 1000;
            }

            .dropdown-menu {
                --position: absolute;
                --top: 100%;
                left: 0;
                z-index: 1000;
                --display: none;
                --float: left;
                --min-width: 10rem;
                padding: .5rem 0;
                margin: 0 0 .125rem 0;
                --font-size: 1rem;
                color: #212529;
                text-align: left;
                list-style: none;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid rgba(0,0,0,.15);
                border-top: 0;
                border-bottom-right-radius: .25rem;
                border-bottom-left-radius: .25rem;
            }

            .dropdown-menu.show {
                display: block;
            }

            .dropdown-item {
                display: block;
                --width: 100%;
                padding: .25rem 1rem;
                clear: both;
                font-weight: 400;
                color: #212529;
                text-align: inherit;
                --white-space: nowrap;
                background-color: transparent;
                border: 0;
                text-decoration: none;
            }

            .dropdown-item:hover {
                background-color: #FCE7CA;
            }

            .dropdown-item.active {
                background-color: #FFC982;
            }

            .dropdown-item:active, .dropdown-item:focus {
                background-color: #FCE7CA;
            }

            a.sort_link {
                cursor: pointer;
                color: #606060;
            }

            a.sort_link.active {
                color: red;
            }

            a.link.username {
                text-decoration: none;
                font-weight: bold;
            }

            b.username {
                font-size: 1.2em;
            }

            .hlp.badge {
                color: #fff;
                font-size: 100%;
            }

            .hlp {
                --font-size: auto;
                color: black;
                text-decoration: none;
                cursor: help;
                position: relative;
                display: inline-block;
            }

            .hlp[title]:after, .hlp[data-hlp]:after {
                opacity: 0;
                content: attr(title);
                position: absolute;
                top: 100%;
                left: 0;
                color: #fff;
                transition: opacity 0.3s;
                border-radius: 6px;
                background-color: #555;
                padding: 5px 5px;
                width: 220px;
                display: none;
                font-size: 90%;
                z-index: 1000;
                text-align: left;
            }

            .hlp[data-hlp]:after {
                content: attr(data-hlp);
            }

            .hlp[title]:hover:after, .hlp[data-hlp]:hover:after {
                opacity: 1;
                display: inline-block;
            }
        </style>
    </head>
    <body bgcolor="#FFFFF2" link="#666699" vlink="#666699" alink="#666699" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: "en",
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                },"google_translate_element");
            }
        </script>
        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <center>
            <table width="760" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td valign=top>
                        <table cellspacing=0 cellpadding=0 border=0 width=100%>
                            <tr>
                                <td background="images/ver.gif" bgcolor=#FF8D00>
                                    <img src="images/top.gif" border="0" align=left>
                                </td>
                                <td background="images/ver.gif" bgcolor=#FF8D00 valign=bottom align=right>
                                    <span style="font-family: verdana; font-size: 12px; color: white">
                                        <b>
                                            <div id="google_translate_element"></div>
                                            <a href=? class=toplink>Home</a>
                                            &middot;<a href=index.php?a= logout class=toplink>Logout</a>
                                        </b>
                                    </span>
                                    &nbsp;&nbsp;
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign=top>
                        <table cellspacing=0 cellpadding=1 border=0 width=100% bgcolor=#ff8d00>
                            <tr>
                                <td>
                                    <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                                        <tr bgcolor="#FFFFFF" valign="top">
                                            <td width=300 align=center>
                                                <table cellspacing=0 cellpadding=2 border=0 width="172">
                                                    <tr>
                                                        <th colspan=2>
                                                            <img src=images/q.gif width=1 height=3>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan=2 class=title>Menu</th>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href=?a= rates>Investment Packages</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=expiring_deposits">Expiring Deposits</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=users">Users</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=top_referral_earnings">Top Referral Earnings</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=ext_accounts_blacklist">Accounts Blacklist</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=transactions">Transactions</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=withdrawal_requests">Withdrawal Requests</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=transactions&ttype=add_funds">Add Funds</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=transactions&ttype=deposit">Deposits</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=transactions&ttype=withdrawal">Withdrawals</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=transactions&ttype=commissions">Referral</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=transactions&ttype=earning">Earnings</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=add_transactions">Add Bonus</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=pending_deposits">Pending Deposits</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href=?a= exchange_rates>Exchange Rates</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href=?a= transactions&ttype=exchange>Exchange History</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    <tr>
                                                        <td class=menutxt>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href=?a= settings>Settings</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=processings">Processings</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=auto-pay-settings">Auto-Withdrawals Settings</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=info_box_settings">Info Box Settings</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=earning_holidays">Earning Holidays</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=security">Security</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=seo_links">Links Replacement</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href=?a= referal>Referral Settings</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=user_notices">User Notices</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=maintenance_page">Maintenance Page</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=news">News</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=custompages">Custom Pages</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=check_ips">IPs Check</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=newsletter">Send a Newsletter</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href="?a=email_templates">Email Templates</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class=menutxt>
                                                            <a href=?a= logout>Logout</a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td bgcolor="#ff8d00" valign="top" width=1>
                                                <img src=images/q.gif width=1 height=1>
                                            </td>
                                            <td bgcolor="#FFFFFF" valign="top" width=99%>
                                                <!-- Main: Start -->
                                                <table width="100%" height="100%" border="0" cellpadding="10" cellspacing="0" class="forTexts">
                                                    <tr>
                                                        <td width=100% height=100% valign=top>
                                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
                                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.7/highcharts.js"></script>
                                                            <script>
                                                                var chart_options = {
                                                                    chart: {
                                                                        type: "column"
                                                                    },
                                                                    title: {
                                                                        text: "Deposits/Withdrawals"
                                                                    },
                                                                    subtitle: {
                                                                        text: ""
                                                                    },
                                                                    legend: {
                                                                        enabled: false
                                                                    },
                                                                    xAxis: {
                                                                        type: "datetime",
                                                                        labels: {
                                                                            format: "{value:%b %e}"
                                                                        }
                                                                    },
                                                                    yAxis: {
                                                                        min: 0,
                                                                        title: {
                                                                            text: "Amount"
                                                                        }
                                                                    },
                                                                    tooltip: {
                                                                        headerFormat: "<span style=font-size:10px>{point.key}</span><table>",
                                                                        pointFormat: "<tr><td style=color:{series.color};padding:0>{series.name}: </td>" + "<td style=padding:0 nowrap><b>{point.y}</b></td></tr>",
                                                                        footerFormat: "</table>",
                                                                        xDateFormat: "%b %e",
                                                                        shared: true,
                                                                        useHTML: true
                                                                    },
                                                                    plotOptions: {
                                                                        column: {
                                                                            pointPadding: 0.2,
                                                                            borderWidth: 0
                                                                        }
                                                                    }
                                                                };
                                                                $(document).ready(function() {
                                                                    var ec = 18;
                                                                    var add_funds = [[1620604800000, 0], [1620691200000, 0], [1620777600000, 0], [1620864000000, 0], [1620950400000, 0], [1621036800000, 0], [1621123200000, 0], [1621209600000, 0], [1621296000000, 0], [1621382400000, 0], [1621468800000, 0], [1621555200000, 0], [1621641600000, 0], [1621728000000, 0], [1621814400000, 0], [1621900800000, 0], [1621987200000, 0], [1622073600000, 0], [1622160000000, 0], [1622246400000, 0], [1622332800000, 0], [1622419200000, 0], [1622505600000, 0], [1622592000000, 0], [1622678400000, 0], [1622764800000, 0], [1622851200000, 0], [1622937600000, 0], [1623024000000, 0], [1623110400000, 0]];
                                                                    var withdrawal = [[1620604800000, 0], [1620691200000, 0], [1620777600000, 0], [1620864000000, 0], [1620950400000, 0], [1621036800000, 0], [1621123200000, 0], [1621209600000, 0], [1621296000000, 0], [1621382400000, 0], [1621468800000, 0], [1621555200000, 0], [1621641600000, 0], [1621728000000, 0], [1621814400000, 0], [1621900800000, 0], [1621987200000, 0], [1622073600000, 0], [1622160000000, 0], [1622246400000, 0], [1622332800000, 0], [1622419200000, 0], [1622505600000, 0], [1622592000000, 0], [1622678400000, 0], [1622764800000, 0], [1622851200000, 0], [1622937600000, 0], [1623024000000, 0], [1623110400000, 0]];
                                                                    chart_options.title.text = "";
                                                                    //"PerfectMoney";
                                                                    chart_options.tooltip.valuePrefix = "$";
                                                                    var series = [{
                                                                        "name": "In",
                                                                        "color": "#ffbb00",
                                                                        "data": add_funds
                                                                    }, {
                                                                        "name": "Out",
                                                                        "color": "#00c292",
                                                                        "data": withdrawal
                                                                    }, ];
                                                                    chart_options.series = series;
                                                                    $("#chart_" + ec).highcharts(chart_options);
                                                                    var ec = 1000;
                                                                    var add_funds = [[1620604800000, 0], [1620691200000, 0], [1620777600000, 0], [1620864000000, 0], [1620950400000, 0], [1621036800000, 0], [1621123200000, 0], [1621209600000, 0], [1621296000000, 0], [1621382400000, 0], [1621468800000, 0], [1621555200000, 0], [1621641600000, 0], [1621728000000, 0], [1621814400000, 0], [1621900800000, 0], [1621987200000, 0], [1622073600000, 0], [1622160000000, 0], [1622246400000, 0], [1622332800000, 0], [1622419200000, 0], [1622505600000, 0], [1622592000000, 0], [1622678400000, 0], [1622764800000, 0], [1622851200000, 455000], [1622937600000, 3100000], [1623024000000, 0], [1623110400000, 4005000]];
                                                                    var withdrawal = [[1620604800000, 0], [1620691200000, 0], [1620777600000, 0], [1620864000000, 0], [1620950400000, 0], [1621036800000, 0], [1621123200000, 0], [1621209600000, 0], [1621296000000, 0], [1621382400000, 0], [1621468800000, 0], [1621555200000, 0], [1621641600000, 0], [1621728000000, 0], [1621814400000, 0], [1621900800000, 0], [1621987200000, 0], [1622073600000, 0], [1622160000000, 0], [1622246400000, 0], [1622332800000, 0], [1622419200000, 0], [1622505600000, 0], [1622592000000, 0], [1622678400000, 0], [1622764800000, 0], [1622851200000, 0], [1622937600000, 0], [1623024000000, 0], [1623110400000, 0]];
                                                                    chart_options.title.text = "";
                                                                    //"Bitcoin";
                                                                    chart_options.tooltip.valuePrefix = "$";
                                                                    var series = [{
                                                                        "name": "In",
                                                                        "color": "#ffbb00",
                                                                        "data": add_funds
                                                                    }, {
                                                                        "name": "Out",
                                                                        "color": "#00c292",
                                                                        "data": withdrawal
                                                                    }, ];
                                                                    chart_options.series = series;
                                                                    $("#chart_" + ec).highcharts(chart_options);
                                                                    var add_funds = [[1620604800000, 0], [1620691200000, 0], [1620777600000, 0], [1620864000000, 0], [1620950400000, 0], [1621036800000, 0], [1621123200000, 0], [1621209600000, 0], [1621296000000, 0], [1621382400000, 0], [1621468800000, 0], [1621555200000, 0], [1621641600000, 0], [1621728000000, 0], [1621814400000, 0], [1621900800000, 0], [1621987200000, 0], [1622073600000, 0], [1622160000000, 0], [1622246400000, 0], [1622332800000, 0], [1622419200000, 0], [1622505600000, 0], [1622592000000, 0], [1622678400000, 0], [1622764800000, 0], [1622851200000, 455000], [1622937600000, 3100000], [1623024000000, 0], [1623110400000, 4005000]];
                                                                    var withdrawal = [[1620604800000, 0], [1620691200000, 0], [1620777600000, 0], [1620864000000, 0], [1620950400000, 0], [1621036800000, 0], [1621123200000, 0], [1621209600000, 0], [1621296000000, 0], [1621382400000, 0], [1621468800000, 0], [1621555200000, 0], [1621641600000, 0], [1621728000000, 0], [1621814400000, 0], [1621900800000, 0], [1621987200000, 0], [1622073600000, 0], [1622160000000, 0], [1622246400000, 0], [1622332800000, 0], [1622419200000, 0], [1622505600000, 0], [1622592000000, 0], [1622678400000, 0], [1622764800000, 0], [1622851200000, 0], [1622937600000, 0], [1623024000000, 0], [1623110400000, 0]];
                                                                    // chart_options.title.text = "Total";
                                                                    chart_options.tooltip.valuePrefix = " ";
                                                                    var series = [{
                                                                        "name": "In",
                                                                        "color": "#ffbb00",
                                                                        "data": add_funds
                                                                    }, {
                                                                        "name": "Out",
                                                                        "color": "#00c292",
                                                                        "data": withdrawal
                                                                    }, ];
                                                                    chart_options.series = series;
                                                                    $("#chart_totals").highcharts(chart_options);
                                                                });
                                                            </script>
                                                            <h3>Information</h3>
                                                            <table class="form">
                                                                <tr>
                                                                    <th>Users:</th>
                                                                    <td>
                                                                        <a data-hlp="Total users registered in the system" class="hlp badge badge-info">1</a>
                                                                        <a data-hlp="How many active users does your system contain" class="hlp badge badge-success">1 (100%)</a>
                                                                        <a data-hlp="How many users are suspended (able to login but can not earn any funds from principal)" class="hlp badge badge-warning">0 (0%)</a>
                                                                        <a data-hlp="How many users are disabled (cannot login and can not earn any funds from principal)" class="hlp badge badge-danger">0 (0%)</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Active Users:</th>
                                                                    <td>
                                                                        <a data-hlp="How many users have ever made a deposit" class="hlp badge badge-success">0 (0%) </a>
                                                                        <a data-hlp="How many registered users haven&#39;t made any deposit yet" class="hlp badge badge-danger">1 (100%) </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Investment Packages:</th>
                                                                    <td>
                                                                        <a data-hlp="Active investment packages number. Active users earn if they have deposited funds in these packages." class="hlp badge badge-success">3</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Withdrawal Requests</th>
                                                                    <td>
                                                                        <a href="?a=withdrawal_requests" class="hlp badge badge-danger">1</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Pending Deposits</th>
                                                                    <td>
                                                                        <a href="?a=pending_deposits" class="hlp badge badge-success">0</a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <table class="list">
                                                                <th></th>
                                                                <th>
                                                                    <a data-hlp="The difference between the funds arrived from payment processings and all the withdrawals you have made." class=hlp>Total System Earnings:</a>
                                                                </th>
                                                                <th>
                                                                    <a data-hlp="The sum of all users&#39; funds added from externl processings." class=hlp>Total Members &#39;Funds Added:</a>
                                                                </th>
                                                                <th>
                                                                    <a data-hlp="The sum of all users&#39; earnings and bonuses minus penalties and withdrawals." class=hlp>Total Users &#39;Balance:</a>
                                                                </th>
                                                                <th>
                                                                    <a data-hlp="Total members&#39; deposit shows you how much funds have users deposited in your system total." class=hlp>Total Deposits:</a>
                                                                </th>
                                                                <th>
                                                                    <a data-hlp="The total principal of all users." class=hlp>Current Deposits:</a>
                                                                </th>
                                                                <th>
                                                                    <a data-hlp="The total referral commissions of all users." class=hlp>Total Referrals Commissions:</a>
                                                                </th>
                                                                <th>
                                                                    <a data-hlp="All the funds you have ever withdrawn to users&#39; payment processing accounts." class=hlp>Total Withdrawals:</a>
                                                                </th>
                                                                <th>
                                                                    <a href="?a=withdrawal_requests" data-hlp="The funds users requested to withdraw." class=hlp>Pending Withdrawals:</a>
                                                                </th>
                                                    </tr>
                                                    <tr class="row1">
                                                        <th>
                                                            <img src="images/18.gif" height="17" width="44" align=absmiddle>
                                                        </th>
                                                        <td>
                                                            <b style="color:gray">$0.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:gray">$0.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:gray">$0.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:gray">$0.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:gray">$0.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:gray">$0.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:gray">$0.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:gray">$0.00</b>
                                                        </td>
                                                    </tr>
                                                    <tr class="row2">
                                                        <th>
                                                            <img src="images/1000.gif" height="17" width="44" align=absmiddle>
                                                        </th>
                                                        <td>
                                                            <b style="color:green">$7560000.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:darkgreen">$7560000.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:darkred">$7559900.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:gray">$0.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:gray">$0.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:gray">$0.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:gray">$0.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:red">$100.00</b>
                                                        </td>
                                                    </tr>
                                                    <tr class="row1">
                                                        <th>Total</th>
                                                        <td>
                                                            <b style="color:green">$7560000.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:darkgreen">$7560000.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:darkred">$7559900.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:gray">$0.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:gray">$0.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:gray">$0.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:gray">$0.00</b>
                                                        </td>
                                                        <td>
                                                            <b style="color:red">$100.00</b>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <br>
                                                <br>
                                                <h3 data-hlp="Total in/out stats shows you how much funds users entered in your system and how much funds you withdrew today, this week, this month, this year and total." class=hlp>Total in/out</h3>
                                                <div id="chart_totals" style="width:100%;height:300px;"></div>
                                                <table class="list">
                                                    <tr>
                                                        <th colspan=2>24 hours
                                            </td>
                                            <th colspan=2>7 days
                                </td>
                                <th colspan=2>Month
                    </td>
                    <th colspan=2>Year
</td><th colspan=2>Total
</td></tr>
<tr>
    <th>In</th>
    <th>Out</th>
    <th>In</th>
    <th>Out</th>
    <th>In</th>
    <th>Out</th>
    <th>In</th>
    <th>Out</th>
    <th>In</th>
    <th>Out</th>
</tr>
</tr>
<tr>
    <td align=center>
        <b style="color:green">$4005000.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td align=center>
        <b style="color:green">$7560000.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td align=center>
        <b style="color:green">$7560000.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td align=center>
        <b style="color:green">$7560000.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td align=center>
        <b style="color:green">$7560000.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
</tr>
<tr>
    <td colspan=2 align=center>
        <b style="color:green">$4005000.00</b>
    </td>
    <td colspan=2 align=center>
        <b style="color:green">$7560000.00</b>
    </td>
    <td colspan=2 align=center>
        <b style="color:green">$7560000.00</b>
    </td>
    <td colspan=2 align=center>
        <b style="color:green">$7560000.00</b>
    </td>
    <td colspan=2 align=center>
        <b style="color:green">$7560000.00</b>
    </td>
</tr>
</table><br>
<br>
<h3 data-hlp="Bitcoin in/out stats shows you how much funds users entered in your system and how much funds you withdrew today, this week, this month, this year and total" class=hlp>Bitcoin in/out</h3>
<div id="chart_1000" style="width:100%;height:300px;"></div>
<br>
<br>
<table class="list">
    <tr>
        <th colspan=2>24 hours
</td><th colspan=2>7 days
</td><th colspan=2>Month
</td><th colspan=2>Year
</td><th colspan=2>Total
</td></tr>
<tr>
    <th>In</th>
    <th>Out</th>
    <th>In</th>
    <th>Out</th>
    <th>In</th>
    <th>Out</th>
    <th>In</th>
    <th>Out</th>
    <th>In</th>
    <th>Out</th>
</tr>
</tr>
<tr>
    <td align=center>
        <b style="color:green">$4005000.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td align=center>
        <b style="color:green">$7560000.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td align=center>
        <b style="color:green">$7560000.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td align=center>
        <b style="color:green">$7560000.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td align=center>
        <b style="color:green">$7560000.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
</tr>
<tr>
    <td colspan=2 align=center>
        <b style="color:green">$4005000.00</b>
    </td>
    <td colspan=2 align=center>
        <b style="color:green">$7560000.00</b>
    </td>
    <td colspan=2 align=center>
        <b style="color:green">$7560000.00</b>
    </td>
    <td colspan=2 align=center>
        <b style="color:green">$7560000.00</b>
    </td>
    <td colspan=2 align=center>
        <b style="color:green">$7560000.00</b>
    </td>
</tr>
</table><br>
<br>
<h3 data-hlp="PerfectMoney in/out stats shows you how much funds users entered in your system and how much funds you withdrew today, this week, this month, this year and total" class=hlp>PerfectMoney in/out</h3>
<div id="chart_18" style="width:100%;height:300px;"></div>
<br>
<br>
<table class="list">
    <tr>
        <th colspan=2>24 hours
</td><th colspan=2>7 days
</td><th colspan=2>Month
</td><th colspan=2>Year
</td><th colspan=2>Total
</td></tr>
<tr>
    <th>In</th>
    <th>Out</th>
    <th>In</th>
    <th>Out</th>
    <th>In</th>
    <th>Out</th>
    <th>In</th>
    <th>Out</th>
    <th>In</th>
    <th>Out</th>
</tr>
</tr>
<tr>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td align=center>
        <b style="color:gray">$0.00</b>
    </td>
</tr>
<tr>
    <td colspan=2 align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td colspan=2 align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td colspan=2 align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td colspan=2 align=center>
        <b style="color:gray">$0.00</b>
    </td>
    <td colspan=2 align=center>
        <b style="color:gray">$0.00</b>
    </td>
</tr>
</table><br>
<br>
<div class="alert alert-warning">
    Welcome to the HYIP Manager Pro Admin Area!<br>
    You can see help messages on almost all pages of the admin area in this part.<br>
    <br>
    You can see how many members are registered in the system on this page.<br>
    System supports 3 types of users:<br>
    <li>Active users. These users can login to the members area and receive earnings.</li>
    <li>Suspended users. These users can login to the members area but will not receive any earnings.</li>
    <li>Disabled users. These users can not login to the members area and will not receive any earnings.</li>
    <br>
    User becomes active when registering and only administrator can change status of any registered user. You can see how many users are active and disabled in the system at the top of this page. <br>
    <br>
    Investment packages:<br>
    You can create unlimited sets of investment packages with any settings and payout options. Also you can change status of any package. <li>Active package. All active users will receive earnings every pay period if made a deposit</li>
    <li>Inactive package. Users will not receive any earnings</li>
    <br>
    <br>
    &quot;Total system earnings &quot;is a difference between funds came from payment processings and all the withdrawals you made. <br>
    <br>
    &quot;Total member &#39;s balance &quot;shows you how many funds can users withdraw from the system. It is the sum of all users &#39;earnings and bonuses minus penalties and withdrawals. <br>
    <br>
    &quot;Total member &#39;s deposit &quot;shows you how many funds have users ever deposited in your system. <br>
    <br>
    &quot;Current members &#39;deposit &quot;shows the overall users &#39;deposit. <br>
    <br>
    &quot;Total withdrawals &quot;shows you how many funds have you withdrawn to users &#39;accounts. <br>
    <br>
    &quot;Pending withdrawals &quot;shows you how many funds users have requested to withdraw. <br>
    <br>In/out stats shows you how many funds users have entered in your system and how many funds have you withdrawn today, this week, this month, this year and total. 
</div>
</td></tr></table>
<!-- Main: END -->
</td></tr></table></td></tr></table></td></tr>
<tr>
    <td height="19" bgcolor="ff8d00">
        <div align="center" class="forCopyright">
            Powered with HYIP Manager Pro. <a href=http://www.goldcoders.com class="forCopyright">GoldCoders.com</a>
        </div>
    </td>
</tr>
</table></center></body></html>
<!--Page generated 1.0112 sec. -->
<!--Memory: 60 M. -->
