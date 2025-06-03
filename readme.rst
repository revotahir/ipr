###################
What is CodeIgniter
###################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/userguide3/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Contributing Guide <https://github.com/bcit-ci/CodeIgniter/blob/develop/contributing.md>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.

***************
Directory Structure
***************

Directory structure:
└── muhammad-hamza-webdev-ipr/
    ├── composer.json
    ├── index.php
    ├── license.txt
    ├── readme.rst
    ├── .editorconfig
    ├── .htaccess
    ├── application/
    │   ├── index.html
    │   ├── cache/
    │   │   └── index.html
    │   ├── config/
    │   │   ├── autoload.php
    │   │   ├── config.php
    │   │   ├── constants.php
    │   │   ├── database.php
    │   │   ├── doctypes.php
    │   │   ├── foreign_chars.php
    │   │   ├── hooks.php
    │   │   ├── index.html
    │   │   ├── memcached.php
    │   │   ├── migration.php
    │   │   ├── mimes.php
    │   │   ├── profiler.php
    │   │   ├── routes.php
    │   │   ├── smileys.php
    │   │   └── user_agents.php
    │   ├── controllers/
    │   │   ├── Welcome.php
    │   │   └── index.html
    │   ├── core/
    │   │   └── index.html
    │   ├── helpers/
    │   │   └── index.html
    │   ├── hooks/
    │   │   └── index.html
    │   ├── language/
    │   │   ├── index.html
    │   │   └── english/
    │   │       └── index.html
    │   ├── libraries/
    │   │   ├── Phpass.php
    │   │   ├── class-phpass.php
    │   │   ├── index.html
    │   │   └── Phpass/
    │   │       ├── Exception.php
    │   │       ├── Hash.php
    │   │       ├── Loader.php
    │   │       ├── Strength.php
    │   │       ├── Exception/
    │   │       │   ├── InvalidArgumentException.php
    │   │       │   ├── RuntimeException.php
    │   │       │   └── UnexpectedValueException.php
    │   │       ├── Hash/
    │   │       │   ├── Adapter.php
    │   │       │   └── Adapter/
    │   │       │       ├── Base.php
    │   │       │       ├── Bcrypt.php
    │   │       │       ├── ExtDes.php
    │   │       │       ├── Md5Crypt.php
    │   │       │       ├── Pbkdf2.php
    │   │       │       ├── Portable.php
    │   │       │       ├── Sha1Crypt.php
    │   │       │       ├── Sha256Crypt.php
    │   │       │       └── Sha512Crypt.php
    │   │       └── Strength/
    │   │           ├── Adapter.php
    │   │           └── Adapter/
    │   │               ├── Base.php
    │   │               ├── Nist.php
    │   │               └── Wolfram.php
    │   ├── logs/
    │   │   └── index.html
    │   ├── models/
    │   │   ├── Generic_model.php
    │   │   └── index.html
    │   ├── third_party/
    │   │   └── index.html
    │   └── views/
    │       ├── add-new-ipr.php
    │       ├── add-new-ipr_Bkup.php
    │       ├── adminDashboard.php
    │       ├── all-order-detail.php
    │       ├── dashboard.php
    │       ├── index.html
    │       ├── ipr-order-list.php
    │       ├── login.php
    │       ├── productDetails.php
    │       ├── signup.php
    │       ├── components/
    │       │   └── header.php
    │       └── errors/
    │           ├── index.html
    │           ├── cli/
    │           │   ├── error_404.php
    │           │   ├── error_db.php
    │           │   ├── error_exception.php
    │           │   ├── error_general.php
    │           │   ├── error_php.php
    │           │   └── index.html
    │           └── html/
    │               ├── error_404.php
    │               ├── error_db.php
    │               ├── error_exception.php
    │               ├── error_general.php
    │               ├── error_php.php
    │               └── index.html
    ├── assets/
    │   ├── images/
    │   │   └── cropped-logo-2-1.webp
    │   ├── libs/
    │   │   ├── css/
    │   │   │   └── style.css
    │   │   └── js/
    │   │       ├── dashboard-ecommerce.js
    │   │       ├── dashboard-finance.js
    │   │       ├── dashboard-influencer.js
    │   │       ├── dashboard-sales.js
    │   │       ├── google_map.js
    │   │       ├── jvectormap.custom.js
    │   │       └── main-js.js
    │   ├── loginCSS/
    │   │   └── style.css
    │   ├── loginImages/
    │   │   └── IPR (1).xlsx
    │   ├── toastr/
    │   └── vendor/
    │       ├── bootstrap/
    │       │   ├── css/
    │       │   └── js/
    │       │       └── bootstrap.bundle.js
    │       ├── bootstrap-colorpicker/
    │       │   ├── @claviska/
    │       │   │   └── jquery-minicolors/
    │       │   │       └── jquery.minicolors.css
    │       │   ├── jquery-asColor/
    │       │   │   └── dist/
    │       │   ├── jquery-asColorPicker/
    │       │   │   └── dist/
    │       │   └── jquery-asGradient/
    │       │       └── dist/
    │       │           └── jquery-asGradient.js
    │       ├── bootstrap-select/
    │       │   ├── css/
    │       │   │   └── bootstrap-select.css
    │       │   └── js/
    │       │       └── bootstrap-select.js
    │       ├── charts/
    │       │   ├── c3charts/
    │       │   │   ├── C3chartjs.js
    │       │   │   └── c3.css
    │       │   ├── chartist-bundle/
    │       │   │   ├── Chartistjs.js
    │       │   │   ├── chartist-plugin-threshold.js
    │       │   │   └── chartist.css
    │       │   ├── charts-bundle/
    │       │   │   ├── Chart.bundle.js
    │       │   │   └── chartjs.js
    │       │   ├── morris-bundle/
    │       │   │   ├── Morrisjs.js
    │       │   │   ├── morris.css
    │       │   │   ├── morris.js
    │       │   │   └── morrisjs.html
    │       │   └── sparkline/
    │       │       ├── jquery.sparkline.js
    │       │       └── spark-js.js
    │       ├── cropper/
    │       │   └── dist/
    │       │       └── cropper-int.js
    │       ├── custom-js/
    │       │   └── jquery.multi-select.html
    │       ├── datatables/
    │       │   ├── css/
    │       │   │   ├── buttons.bootstrap4.css
    │       │   │   ├── dataTables.bootstrap4.css
    │       │   │   ├── fixedHeader.bootstrap4.css
    │       │   │   └── select.bootstrap4.css
    │       │   └── js/
    │       │       └── data-table.js
    │       ├── datepicker/
    │       │   ├── datepicker.js
    │       │   ├── moment.js
    │       │   ├── tempusdominus-bootstrap-4.css
    │       │   └── tempusdominus-bootstrap-4.js
    │       ├── daterangepicker/
    │       │   └── daterangepicker.css
    │       ├── dropzone/
    │       │   └── dropzone.js
    │       ├── fonts/
    │       │   ├── circular-std/
    │       │   │   ├── CircularStd-Black.woff
    │       │   │   ├── CircularStd-BlackItalic.woff
    │       │   │   ├── CircularStd-Bold.woff
    │       │   │   ├── CircularStd-BoldItalic.woff
    │       │   │   ├── CircularStd-Book.woff
    │       │   │   ├── CircularStd-BookItalic.woff
    │       │   │   ├── CircularStd-Medium.woff
    │       │   │   ├── CircularStd-MediumItalic.woff
    │       │   │   └── style.css
    │       │   ├── flag-icon-css/
    │       │   │   └── flags/
    │       │   ├── fontawesome/
    │       │   │   ├── css/
    │       │   │   │   └── fontawesome-all.css
    │       │   │   └── webfonts/
    │       │   │       ├── fa-brands-400.eot
    │       │   │       ├── fa-brands-400.html
    │       │   │       ├── fa-brands-400.ttf
    │       │   │       ├── fa-brands-400.woff
    │       │   │       ├── fa-brands-400d41d.eot
    │       │   │       ├── fa-regular-400.eot
    │       │   │       ├── fa-regular-400.html
    │       │   │       ├── fa-regular-400.ttf
    │       │   │       ├── fa-regular-400.woff
    │       │   │       ├── fa-regular-400d41d.eot
    │       │   │       ├── fa-solid-900.eot
    │       │   │       ├── fa-solid-900.html
    │       │   │       ├── fa-solid-900.ttf
    │       │   │       ├── fa-solid-900.woff
    │       │   │       └── fa-solid-900d41d.eot
    │       │   ├── material-design-iconic-font/
    │       │   │   ├── css/
    │       │   │   └── fonts/
    │       │   │       ├── materialdesignicons-webfontd41d.eot
    │       │   │       ├── materialdesignicons-webfontdc99.eot
    │       │   │       ├── materialdesignicons-webfontdc99.html
    │       │   │       ├── materialdesignicons-webfontdc99.ttf
    │       │   │       └── materialdesignicons-webfontdc99.woff
    │       │   ├── simple-line-icons/
    │       │   │   ├── css/
    │       │   │   │   └── simple-line-icons.css
    │       │   │   └── fonts/
    │       │   │       ├── Simple-Line-Icons4c82.eot
    │       │   │       ├── Simple-Line-Icons4c82.html
    │       │   │       ├── Simple-Line-Icons4c82.ttf
    │       │   │       ├── Simple-Line-Icons4c82.woff
    │       │   │       └── Simple-Line-Iconsd41d.eot
    │       │   ├── themify-icons/
    │       │   │   ├── themify-icons.css
    │       │   │   └── fonts/
    │       │   │       ├── themify.ttf
    │       │   │       ├── themify.woff
    │       │   │       ├── themify9f24.eot
    │       │   │       └── themifyd41d.eot
    │       │   └── weather-icons/
    │       │       ├── css/
    │       │       └── fonts/
    │       │           └── weathericons-regular-webfont.eot
    │       ├── full-calendar/
    │       │   ├── css/
    │       │   │   ├── fullcalendar.css
    │       │   │   └── fullcalendar.print.css
    │       │   └── js/
    │       │       ├── calendar.js
    │       │       └── fullcalendar.js
    │       ├── gauge/
    │       │   └── gauge.js
    │       ├── inputmask/
    │       │   ├── css/
    │       │   │   └── inputmask.css
    │       │   └── js/
    │       │       └── jquery.inputmask.bundle.js
    │       ├── jquery/
    │       ├── jvectormap/
    │       │   ├── jquery-jvectormap-2.0.2.css
    │       │   ├── jquery-jvectormap-au-mill.js
    │       │   ├── jquery-jvectormap-in-mill.js
    │       │   ├── jquery-jvectormap-uk-mill-en.js
    │       │   ├── jquery-jvectormap-us-aea-en.js
    │       │   └── jquery-jvectormap-world-mill-en.js
    │       ├── multi-select/
    │       │   ├── css/
    │       │   │   └── multi-select.css
    │       │   └── js/
    │       │       └── jquery.multi-select.js
    │       ├── parsley/
    │       │   └── parsley.js
    │       ├── select2/
    │       │   ├── css/
    │       │   │   └── select2.css
    │       │   └── js/
    │       ├── shortable-nestable/
    │       │   ├── jquery.nestable.js
    │       │   └── sort-nest.js
    │       ├── slimscroll/
    │       │   └── jquery.slimscroll.js
    │       ├── summernote/
    │       │   ├── css/
    │       │   │   ├── summernote-bs4.css
    │       │   │   └── font/
    │       │   │       ├── summernote.eot
    │       │   │       ├── summernote.ttf
    │       │   │       ├── summernote.woff
    │       │   │       └── summernote.woff2
    │       │   └── js/
    │       │       └── summernote-bs4.js
    │       ├── timeline/
    │       │   ├── img/
    │       │   └── js/
    │       │       └── main.js
    │       └── vector-map/
    │           └── jqvmap.css
    ├── db/
    │   └── ipr.sql
    └── system/
        ├── index.html
        ├── .htaccess
        ├── core/
        │   ├── Benchmark.php
        │   ├── CodeIgniter.php
        │   ├── Common.php
        │   ├── Config.php
        │   ├── Controller.php
        │   ├── Exceptions.php
        │   ├── Hooks.php
        │   ├── Input.php
        │   ├── Lang.php
        │   ├── Loader.php
        │   ├── Log.php
        │   ├── Model.php
        │   ├── Output.php
        │   ├── Router.php
        │   ├── Security.php
        │   ├── URI.php
        │   ├── Utf8.php
        │   ├── index.html
        │   └── compat/
        │       ├── hash.php
        │       ├── index.html
        │       ├── mbstring.php
        │       ├── password.php
        │       └── standard.php
        ├── database/
        │   ├── DB.php
        │   ├── DB_cache.php
        │   ├── DB_driver.php
        │   ├── DB_forge.php
        │   ├── DB_query_builder.php
        │   ├── DB_result.php
        │   ├── DB_utility.php
        │   ├── index.html
        │   └── drivers/
        │       ├── index.html
        │       ├── cubrid/
        │       │   ├── cubrid_driver.php
        │       │   ├── cubrid_forge.php
        │       │   ├── cubrid_result.php
        │       │   ├── cubrid_utility.php
        │       │   └── index.html
        │       ├── ibase/
        │       │   ├── ibase_driver.php
        │       │   ├── ibase_forge.php
        │       │   ├── ibase_result.php
        │       │   ├── ibase_utility.php
        │       │   └── index.html
        │       ├── mssql/
        │       │   ├── index.html
        │       │   ├── mssql_driver.php
        │       │   ├── mssql_forge.php
        │       │   ├── mssql_result.php
        │       │   └── mssql_utility.php
        │       ├── mysql/
        │       │   ├── index.html
        │       │   ├── mysql_driver.php
        │       │   ├── mysql_forge.php
        │       │   ├── mysql_result.php
        │       │   └── mysql_utility.php
        │       ├── mysqli/
        │       │   ├── index.html
        │       │   ├── mysqli_driver.php
        │       │   ├── mysqli_forge.php
        │       │   ├── mysqli_result.php
        │       │   └── mysqli_utility.php
        │       ├── oci8/
        │       │   ├── index.html
        │       │   ├── oci8_driver.php
        │       │   ├── oci8_forge.php
        │       │   ├── oci8_result.php
        │       │   └── oci8_utility.php
        │       ├── odbc/
        │       │   ├── index.html
        │       │   ├── odbc_driver.php
        │       │   ├── odbc_forge.php
        │       │   ├── odbc_result.php
        │       │   └── odbc_utility.php
        │       ├── pdo/
        │       │   ├── index.html
        │       │   ├── pdo_driver.php
        │       │   ├── pdo_forge.php
        │       │   ├── pdo_result.php
        │       │   ├── pdo_utility.php
        │       │   └── subdrivers/
        │       │       ├── index.html
        │       │       ├── pdo_4d_driver.php
        │       │       ├── pdo_4d_forge.php
        │       │       ├── pdo_cubrid_driver.php
        │       │       ├── pdo_cubrid_forge.php
        │       │       ├── pdo_dblib_driver.php
        │       │       ├── pdo_dblib_forge.php
        │       │       ├── pdo_firebird_driver.php
        │       │       ├── pdo_firebird_forge.php
        │       │       ├── pdo_ibm_driver.php
        │       │       ├── pdo_ibm_forge.php
        │       │       ├── pdo_informix_driver.php
        │       │       ├── pdo_informix_forge.php
        │       │       ├── pdo_mysql_driver.php
        │       │       ├── pdo_mysql_forge.php
        │       │       ├── pdo_oci_driver.php
        │       │       ├── pdo_oci_forge.php
        │       │       ├── pdo_odbc_driver.php
        │       │       ├── pdo_odbc_forge.php
        │       │       ├── pdo_pgsql_driver.php
        │       │       ├── pdo_pgsql_forge.php
        │       │       ├── pdo_sqlite_driver.php
        │       │       ├── pdo_sqlite_forge.php
        │       │       ├── pdo_sqlsrv_driver.php
        │       │       └── pdo_sqlsrv_forge.php
        │       ├── postgre/
        │       │   ├── index.html
        │       │   ├── postgre_driver.php
        │       │   ├── postgre_forge.php
        │       │   ├── postgre_result.php
        │       │   └── postgre_utility.php
        │       ├── sqlite/
        │       │   ├── index.html
        │       │   ├── sqlite_driver.php
        │       │   ├── sqlite_forge.php
        │       │   ├── sqlite_result.php
        │       │   └── sqlite_utility.php
        │       ├── sqlite3/
        │       │   ├── index.html
        │       │   ├── sqlite3_driver.php
        │       │   ├── sqlite3_forge.php
        │       │   ├── sqlite3_result.php
        │       │   └── sqlite3_utility.php
        │       └── sqlsrv/
        │           ├── index.html
        │           ├── sqlsrv_driver.php
        │           ├── sqlsrv_forge.php
        │           ├── sqlsrv_result.php
        │           └── sqlsrv_utility.php
        ├── fonts/
        │   ├── index.html
        │   └── texb.ttf
        ├── helpers/
        │   ├── array_helper.php
        │   ├── captcha_helper.php
        │   ├── cookie_helper.php
        │   ├── date_helper.php
        │   ├── directory_helper.php
        │   ├── download_helper.php
        │   ├── email_helper.php
        │   ├── file_helper.php
        │   ├── form_helper.php
        │   ├── html_helper.php
        │   ├── index.html
        │   ├── inflector_helper.php
        │   ├── language_helper.php
        │   ├── number_helper.php
        │   ├── path_helper.php
        │   ├── security_helper.php
        │   ├── smiley_helper.php
        │   ├── string_helper.php
        │   ├── text_helper.php
        │   ├── typography_helper.php
        │   ├── url_helper.php
        │   └── xml_helper.php
        ├── language/
        │   ├── index.html
        │   └── english/
        │       ├── calendar_lang.php
        │       ├── date_lang.php
        │       ├── db_lang.php
        │       ├── email_lang.php
        │       ├── form_validation_lang.php
        │       ├── ftp_lang.php
        │       ├── imglib_lang.php
        │       ├── index.html
        │       ├── migration_lang.php
        │       ├── number_lang.php
        │       ├── pagination_lang.php
        │       ├── profiler_lang.php
        │       ├── unit_test_lang.php
        │       └── upload_lang.php
        └── libraries/
            ├── Calendar.php
            ├── Cart.php
            ├── Driver.php
            ├── Email.php
            ├── Encrypt.php
            ├── Encryption.php
            ├── Form_validation.php
            ├── Ftp.php
            ├── Image_lib.php
            ├── Javascript.php
            ├── Migration.php
            ├── Pagination.php
            ├── Parser.php
            ├── Phpass.php
            ├── Profiler.php
            ├── Table.php
            ├── Trackback.php
            ├── Typography.php
            ├── Unit_test.php
            ├── Upload.php
            ├── User_agent.php
            ├── Xmlrpc.php
            ├── Xmlrpcs.php
            ├── Zip.php
            ├── index.html
            ├── Cache/
            │   ├── Cache.php
            │   ├── index.html
            │   └── drivers/
            │       ├── Cache_apc.php
            │       ├── Cache_dummy.php
            │       ├── Cache_file.php
            │       ├── Cache_memcached.php
            │       ├── Cache_redis.php
            │       ├── Cache_wincache.php
            │       └── index.html
            ├── Javascript/
            │   ├── Jquery.php
            │   └── index.html
            └── Session/
                ├── CI_Session_driver_interface.php
                ├── OldSessionWrapper.php
                ├── PHP8SessionWrapper.php
                ├── Session.php
                ├── SessionHandlerInterface.php
                ├── SessionUpdateTimestampHandlerInterface.php
                ├── Session_driver.php
                ├── index.html
                └── drivers/
                    ├── Session_database_driver.php
                    ├── Session_files_driver.php
                    ├── Session_memcached_driver.php
                    ├── Session_redis_driver.php
                    └── index.html
