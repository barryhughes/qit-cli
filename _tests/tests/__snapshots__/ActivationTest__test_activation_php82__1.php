<?php return '[
    [
        {
            "run_id": 123456,
            "test_type": "activation",
            "wordpress_version": "6.0.0-normalized",
            "woocommerce_version": "6.0.0-normalized",
            "php_version": "8.2",
            "additional_woo_plugins": [],
            "additional_wp_plugins": [],
            "test_log": "",
            "status": "warning",
            "test_result_aws_url": "https:\\/\\/test-results-aws.com",
            "test_result_aws_expiration": 1234567890,
            "is_development": true,
            "woo_extension": {
                "id": 18619,
                "host": "wccom",
                "name": "Google Product Feed"
            },
            "client": "qit_cli",
            "event": "cli_development_extension_test",
            "optional_features": {
                "hpos": false,
                "cc_blocks": false
            },
            "test_results_manager_url": "https:\\/\\/test-results-manager.com",
            "test_results_manager_expiration": 1234567890,
            "test_summary": "213 Errors Detected. (0 Fatal, 0 Warnings, 213 Notices)",
            "debug_log": "",
            "version": "Zip",
            "test_result_json_extracted": "{EXTRACTED}"
        },
        {
            "test_result_json": {
                "results_overview": {
                    "total_extensions": "0",
                    "extensions_with_errors": {
                        "": {
                            "WP-CLI Plugin Activation": 182,
                            "\\/": 10,
                            "\\/cart\\/": 11,
                            "\\/my-account\\/": 10
                        }
                    },
                    "error_totals": {
                        "fatal": 0,
                        "notice": 213,
                        "warning": 0,
                        "E_DEPRECATED": 213
                    },
                    "summary": "213 Errors Detected. (0 Fatal, 0 Warnings, 213 Notices)",
                    "error_count": 213,
                    "count_extensions_with_errors": 1
                },
                "0": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderTableMigrator.php",
                    "error_line": 25,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 44,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/ExtendedContainer.php",
                            "line": 117,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Container",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "1": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                    "error_line": 42,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                            "line": 31,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 45,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "2": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                    "error_line": 42,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                            "line": 31,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 46,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "3": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderOpTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderOpTableMigrator.php",
                    "error_line": 26,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderOpTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 47,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/ExtendedContainer.php",
                            "line": 117,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Container",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "4": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostMetaToOrderMetaMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostMetaToOrderMetaMigrator.php",
                    "error_line": 43,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToMetaTableMigrator.php",
                            "line": 60,
                            "function": "get_meta_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostMetaToOrderMetaMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostMetaToOrderMetaMigrator.php",
                            "line": 32,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToMetaTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 48,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostMetaToOrderMetaMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "5": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Countries::$countries is deprecated",
                    "error_file": "includes\\/class-wc-countries.php",
                    "error_line": 51,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-countries.php",
                            "line": 38,
                            "function": "get_countries",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-countries.php",
                            "line": 250,
                            "function": "__get",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/wc-core-functions.php",
                            "line": 1353,
                            "function": "get_allowed_countries",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/data-stores\\/class-wc-customer-data-store-session.php",
                            "line": 129,
                            "function": "wc_get_customer_default_location"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/data-stores\\/class-wc-customer-data-store-session.php",
                            "line": 118,
                            "function": "set_defaults",
                            "class": "WC_Customer_Data_Store_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-data-store.php",
                            "line": 159,
                            "function": "read",
                            "class": "WC_Customer_Data_Store_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-customer.php",
                            "line": 125,
                            "function": "read",
                            "class": "WC_Data_Store",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "6": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Cart::$coupon_discount_totals is deprecated",
                    "error_file": "legacy\\/class-wc-legacy-cart.php",
                    "error_line": 266,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart.php",
                            "line": 404,
                            "function": "__set",
                            "class": "WC_Legacy_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart-session.php",
                            "line": 88,
                            "function": "set_coupon_discount_totals",
                            "class": "WC_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "get_cart_from_session",
                            "class": "WC_Cart_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-settings.php",
                            "line": 639,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1336,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-settings.php"
                            ],
                            "function": "require"
                        }
                    ],
                    "db_error": ""
                },
                "7": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Cart::$coupon_discount_tax_totals is deprecated",
                    "error_file": "legacy\\/class-wc-legacy-cart.php",
                    "error_line": 266,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart.php",
                            "line": 413,
                            "function": "__set",
                            "class": "WC_Legacy_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart-session.php",
                            "line": 89,
                            "function": "set_coupon_discount_tax_totals",
                            "class": "WC_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "get_cart_from_session",
                            "class": "WC_Cart_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-settings.php",
                            "line": 639,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1336,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-settings.php"
                            ],
                            "function": "require"
                        }
                    ],
                    "db_error": ""
                },
                "8": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_New_Order::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-new-order.php",
                            "line": 53,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-new-order.php",
                            "line": 251,
                            "function": "__construct",
                            "class": "WC_Email_New_Order",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 221,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-new-order.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "9": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Cancelled_Order::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-cancelled-order.php",
                            "line": 46,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-cancelled-order.php",
                            "line": 209,
                            "function": "__construct",
                            "class": "WC_Email_Cancelled_Order",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 222,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-cancelled-order.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "10": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Failed_Order::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-failed-order.php",
                            "line": 45,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-failed-order.php",
                            "line": 207,
                            "function": "__construct",
                            "class": "WC_Email_Failed_Order",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 223,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-failed-order.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "11": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Customer_On_Hold_Order::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-on-hold-order.php",
                            "line": 47,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-on-hold-order.php",
                            "line": 148,
                            "function": "__construct",
                            "class": "WC_Email_Customer_On_Hold_Order",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 224,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-on-hold-order.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "12": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Customer_Processing_Order::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-processing-order.php",
                            "line": 49,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-processing-order.php",
                            "line": 150,
                            "function": "__construct",
                            "class": "WC_Email_Customer_Processing_Order",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 225,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-processing-order.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "13": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Customer_Completed_Order::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-completed-order.php",
                            "line": 45,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-completed-order.php",
                            "line": 146,
                            "function": "__construct",
                            "class": "WC_Email_Customer_Completed_Order",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 226,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-completed-order.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "14": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Customer_Refunded_Order::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-refunded-order.php",
                            "line": 60,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-refunded-order.php",
                            "line": 302,
                            "function": "__construct",
                            "class": "WC_Email_Customer_Refunded_Order",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 227,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-refunded-order.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "15": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Customer_Invoice::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-invoice.php",
                            "line": 42,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-invoice.php",
                            "line": 246,
                            "function": "__construct",
                            "class": "WC_Email_Customer_Invoice",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 228,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-invoice.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "16": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Customer_Note::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-note.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-note.php",
                            "line": 166,
                            "function": "__construct",
                            "class": "WC_Email_Customer_Note",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 229,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-note.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "17": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Customer_Reset_Password::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-reset-password.php",
                            "line": 72,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-reset-password.php",
                            "line": 177,
                            "function": "__construct",
                            "class": "WC_Email_Customer_Reset_Password",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 230,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-reset-password.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "18": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Customer_New_Account::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-new-account.php",
                            "line": 73,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-new-account.php",
                            "line": 203,
                            "function": "__construct",
                            "class": "WC_Email_Customer_New_Account",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 231,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-new-account.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "19": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Features is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "20": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Notes is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "21": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\NoteActions is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "22": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Coupons is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "23": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Data is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "24": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\DataCountries is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "25": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\DataDownloadIPs is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "26": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Experiments is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "27": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Marketing is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "28": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\MarketingOverview is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "29": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\MarketingRecommendations is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "30": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\MarketingChannels is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "31": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\MarketingCampaigns is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "32": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\MarketingCampaignTypes is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "33": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Options is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "34": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Orders is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "35": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\PaymentGatewaySuggestions is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "36": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Products is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "37": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\ProductAttributes is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "38": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\ProductAttributeTerms is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "39": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\ProductCategories is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "40": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\ProductVariations is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "41": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\ProductReviews is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "42": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\ProductsLowInStock is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "43": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\SettingOptions is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "44": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Themes is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "45": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Plugins is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "46": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\OnboardingFreeExtensions is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "47": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\OnboardingProductTypes is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "48": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\OnboardingProfile is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "49": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\OnboardingTasks is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "50": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\OnboardingThemes is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "51": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\NavigationFavorites is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "52": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Taxes is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "53": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\MobileAppMagicLink is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "54": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Customers is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "55": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Leaderboards is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "56": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "57": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Import\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "58": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Export\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "59": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Products\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "60": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Variations\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "61": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Products\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "62": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Variations\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "63": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Revenue\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "64": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Orders\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "65": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Orders\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "66": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Categories\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "67": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Taxes\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "68": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Taxes\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "69": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Coupons\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "70": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Coupons\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "71": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Stock\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "72": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Stock\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "73": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Downloads\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "74": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Downloads\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "75": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Customers\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "76": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Customers\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "77": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\PerformanceIndicators\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "78": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema::$image_attachment_schema is deprecated",
                    "error_file": "V1\\/CheckoutSchema.php",
                    "error_line": 51,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/SchemaController.php",
                            "line": 72,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/RoutesController.php",
                            "line": 91,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\SchemaController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/RoutesController.php",
                            "line": 107,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\RoutesController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/RoutesController.php",
                            "line": 68,
                            "function": "register_routes",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\RoutesController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/StoreApi.php",
                            "line": 28,
                            "function": "register_all_routes",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\RoutesController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "Automattic\\\\WooCommerce\\\\StoreApi\\\\{closure}",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\StoreApi",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "79": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_Paypal::$testmode is deprecated",
                    "error_file": "paypal\\/class-wc-gateway-paypal.php",
                    "error_line": 60,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 233,
                            "function": "__construct",
                            "class": "WC_Gateway_Paypal",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 83,
                            "function": "should_load_paypal_standard",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "80": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_Paypal::$debug is deprecated",
                    "error_file": "paypal\\/class-wc-gateway-paypal.php",
                    "error_line": 61,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 233,
                            "function": "__construct",
                            "class": "WC_Gateway_Paypal",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 83,
                            "function": "should_load_paypal_standard",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "81": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_Paypal::$email is deprecated",
                    "error_file": "paypal\\/class-wc-gateway-paypal.php",
                    "error_line": 62,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 233,
                            "function": "__construct",
                            "class": "WC_Gateway_Paypal",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 83,
                            "function": "should_load_paypal_standard",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "82": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_Paypal::$receiver_email is deprecated",
                    "error_file": "paypal\\/class-wc-gateway-paypal.php",
                    "error_line": 63,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 233,
                            "function": "__construct",
                            "class": "WC_Gateway_Paypal",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 83,
                            "function": "should_load_paypal_standard",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "83": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_Paypal::$identity_token is deprecated",
                    "error_file": "paypal\\/class-wc-gateway-paypal.php",
                    "error_line": 64,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 233,
                            "function": "__construct",
                            "class": "WC_Gateway_Paypal",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 83,
                            "function": "should_load_paypal_standard",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "84": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_BACS::$instructions is deprecated",
                    "error_file": "bacs\\/class-wc-gateway-bacs.php",
                    "error_line": 49,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 97,
                            "function": "__construct",
                            "class": "WC_Gateway_BACS",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/AbstractSchema.php",
                            "line": 62,
                            "function": "get_properties",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "85": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_BACS::$account_details is deprecated",
                    "error_file": "bacs\\/class-wc-gateway-bacs.php",
                    "error_line": 52,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 97,
                            "function": "__construct",
                            "class": "WC_Gateway_BACS",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/AbstractSchema.php",
                            "line": 62,
                            "function": "get_properties",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "86": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_Cheque::$instructions is deprecated",
                    "error_file": "cheque\\/class-wc-gateway-cheque.php",
                    "error_line": 41,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 97,
                            "function": "__construct",
                            "class": "WC_Gateway_Cheque",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/AbstractSchema.php",
                            "line": 62,
                            "function": "get_properties",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "87": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_COD::$instructions is deprecated",
                    "error_file": "cod\\/class-wc-gateway-cod.php",
                    "error_line": 40,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 97,
                            "function": "__construct",
                            "class": "WC_Gateway_COD",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/AbstractSchema.php",
                            "line": 62,
                            "function": "get_properties",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "88": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_COD::$enable_for_methods is deprecated",
                    "error_file": "cod\\/class-wc-gateway-cod.php",
                    "error_line": 41,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 97,
                            "function": "__construct",
                            "class": "WC_Gateway_COD",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/AbstractSchema.php",
                            "line": 62,
                            "function": "get_properties",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "89": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_COD::$enable_for_virtual is deprecated",
                    "error_file": "cod\\/class-wc-gateway-cod.php",
                    "error_line": 42,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 97,
                            "function": "__construct",
                            "class": "WC_Gateway_COD",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/AbstractSchema.php",
                            "line": 62,
                            "function": "get_properties",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "90": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema::$image_attachment_schema is deprecated",
                    "error_file": "V1\\/CheckoutSchema.php",
                    "error_line": 51,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/SchemaController.php",
                            "line": 72,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/RoutesController.php",
                            "line": 91,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\SchemaController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/RoutesController.php",
                            "line": 107,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\RoutesController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/RoutesController.php",
                            "line": 69,
                            "function": "register_routes",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\RoutesController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/StoreApi.php",
                            "line": 28,
                            "function": "register_all_routes",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\RoutesController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "Automattic\\\\WooCommerce\\\\StoreApi\\\\{closure}",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\StoreApi",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "91": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderTableMigrator.php",
                    "error_line": 25,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 44,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/ExtendedContainer.php",
                            "line": 117,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Container",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "92": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                    "error_line": 42,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                            "line": 31,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 45,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "93": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                    "error_line": 42,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                            "line": 31,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 46,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "94": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderOpTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderOpTableMigrator.php",
                    "error_line": 26,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderOpTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 47,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/ExtendedContainer.php",
                            "line": 117,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Container",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "95": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostMetaToOrderMetaMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostMetaToOrderMetaMigrator.php",
                    "error_line": 43,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToMetaTableMigrator.php",
                            "line": 60,
                            "function": "get_meta_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostMetaToOrderMetaMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostMetaToOrderMetaMigrator.php",
                            "line": 32,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToMetaTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 48,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostMetaToOrderMetaMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "96": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Countries::$countries is deprecated",
                    "error_file": "includes\\/class-wc-countries.php",
                    "error_line": 51,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-countries.php",
                            "line": 38,
                            "function": "get_countries",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-countries.php",
                            "line": 250,
                            "function": "__get",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/wc-core-functions.php",
                            "line": 1353,
                            "function": "get_allowed_countries",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/data-stores\\/class-wc-customer-data-store-session.php",
                            "line": 129,
                            "function": "wc_get_customer_default_location"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/data-stores\\/class-wc-customer-data-store-session.php",
                            "line": 118,
                            "function": "set_defaults",
                            "class": "WC_Customer_Data_Store_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-data-store.php",
                            "line": 159,
                            "function": "read",
                            "class": "WC_Customer_Data_Store_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-customer.php",
                            "line": 125,
                            "function": "read",
                            "class": "WC_Data_Store",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "97": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Cart::$coupon_discount_totals is deprecated",
                    "error_file": "legacy\\/class-wc-legacy-cart.php",
                    "error_line": 266,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart.php",
                            "line": 404,
                            "function": "__set",
                            "class": "WC_Legacy_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart-session.php",
                            "line": 88,
                            "function": "set_coupon_discount_totals",
                            "class": "WC_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "get_cart_from_session",
                            "class": "WC_Cart_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-settings.php",
                            "line": 639,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1336,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-settings.php"
                            ],
                            "function": "require"
                        }
                    ],
                    "db_error": ""
                },
                "98": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Cart::$coupon_discount_tax_totals is deprecated",
                    "error_file": "legacy\\/class-wc-legacy-cart.php",
                    "error_line": 266,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart.php",
                            "line": 413,
                            "function": "__set",
                            "class": "WC_Legacy_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart-session.php",
                            "line": 89,
                            "function": "set_coupon_discount_tax_totals",
                            "class": "WC_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "get_cart_from_session",
                            "class": "WC_Cart_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-settings.php",
                            "line": 639,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1336,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-settings.php"
                            ],
                            "function": "require"
                        }
                    ],
                    "db_error": ""
                },
                "99": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_New_Order::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-new-order.php",
                            "line": 53,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-new-order.php",
                            "line": 251,
                            "function": "__construct",
                            "class": "WC_Email_New_Order",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 221,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-new-order.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "100": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Cancelled_Order::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-cancelled-order.php",
                            "line": 46,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-cancelled-order.php",
                            "line": 209,
                            "function": "__construct",
                            "class": "WC_Email_Cancelled_Order",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 222,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-cancelled-order.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "101": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Failed_Order::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-failed-order.php",
                            "line": 45,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-failed-order.php",
                            "line": 207,
                            "function": "__construct",
                            "class": "WC_Email_Failed_Order",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 223,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-failed-order.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "102": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Customer_On_Hold_Order::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-on-hold-order.php",
                            "line": 47,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-on-hold-order.php",
                            "line": 148,
                            "function": "__construct",
                            "class": "WC_Email_Customer_On_Hold_Order",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 224,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-on-hold-order.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "103": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Customer_Processing_Order::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-processing-order.php",
                            "line": 49,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-processing-order.php",
                            "line": 150,
                            "function": "__construct",
                            "class": "WC_Email_Customer_Processing_Order",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 225,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-processing-order.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "104": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Customer_Completed_Order::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-completed-order.php",
                            "line": 45,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-completed-order.php",
                            "line": 146,
                            "function": "__construct",
                            "class": "WC_Email_Customer_Completed_Order",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 226,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-completed-order.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "105": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Customer_Refunded_Order::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-refunded-order.php",
                            "line": 60,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-refunded-order.php",
                            "line": 302,
                            "function": "__construct",
                            "class": "WC_Email_Customer_Refunded_Order",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 227,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-refunded-order.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "106": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Customer_Invoice::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-invoice.php",
                            "line": 42,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-invoice.php",
                            "line": 246,
                            "function": "__construct",
                            "class": "WC_Email_Customer_Invoice",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 228,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-invoice.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "107": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Customer_Note::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-note.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-note.php",
                            "line": 166,
                            "function": "__construct",
                            "class": "WC_Email_Customer_Note",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 229,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-note.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "108": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Customer_Reset_Password::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-reset-password.php",
                            "line": 72,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-reset-password.php",
                            "line": 177,
                            "function": "__construct",
                            "class": "WC_Email_Customer_Reset_Password",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 230,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-reset-password.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "109": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Email_Customer_New_Account::$email_type is deprecated",
                    "error_file": "emails\\/class-wc-email.php",
                    "error_line": 254,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-new-account.php",
                            "line": 73,
                            "function": "__construct",
                            "class": "WC_Email",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-new-account.php",
                            "line": 203,
                            "function": "__construct",
                            "class": "WC_Email_Customer_New_Account",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 231,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/emails\\/class-wc-email-customer-new-account.php"
                            ],
                            "function": "include"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 190,
                            "function": "init",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-emails.php",
                            "line": 52,
                            "function": "__construct",
                            "class": "WC_Emails",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-api.php",
                            "line": 180,
                            "function": "instance",
                            "class": "WC_Emails",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "register_wp_admin_settings",
                            "class": "WC_API",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "110": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Features is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "111": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Notes is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "112": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\NoteActions is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "113": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Coupons is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "114": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Data is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "115": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\DataCountries is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "116": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\DataDownloadIPs is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "117": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Experiments is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "118": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Marketing is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "119": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\MarketingOverview is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "120": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\MarketingRecommendations is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "121": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\MarketingChannels is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "122": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\MarketingCampaigns is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "123": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\MarketingCampaignTypes is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "124": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Options is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "125": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Orders is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "126": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\PaymentGatewaySuggestions is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "127": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Products is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "128": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\ProductAttributes is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "129": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\ProductAttributeTerms is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "130": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\ProductCategories is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "131": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\ProductVariations is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "132": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\ProductReviews is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "133": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\ProductsLowInStock is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "134": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\SettingOptions is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "135": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Themes is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "136": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Plugins is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "137": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\OnboardingFreeExtensions is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "138": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\OnboardingProductTypes is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "139": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\OnboardingProfile is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "140": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\OnboardingTasks is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "141": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\OnboardingThemes is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "142": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\NavigationFavorites is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "143": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Taxes is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "144": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\MobileAppMagicLink is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "145": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Customers is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "146": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Leaderboards is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "147": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "148": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Import\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "149": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Export\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "150": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Products\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "151": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Variations\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "152": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Products\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "153": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Variations\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "154": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Revenue\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "155": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Orders\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "156": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Orders\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "157": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Categories\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "158": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Taxes\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "159": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Taxes\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "160": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Coupons\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "161": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Coupons\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "162": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Stock\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "163": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Stock\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "164": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Downloads\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "165": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Downloads\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "166": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Customers\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "167": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\Customers\\\\Stats\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "168": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init::$Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Reports\\\\PerformanceIndicators\\\\Controller is deprecated",
                    "error_file": "API\\/Init.php",
                    "error_line": 142,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "rest_api_init",
                            "class": "Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Init",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/cli\\/class-wc-cli-runner.php",
                            "line": 59,
                            "function": "do_action"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/class-wp-cli.php",
                            "line": 336,
                            "function": "after_wp_load",
                            "class": "WC_CLI_Runner",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1362,
                            "function": "do_hook",
                            "class": "WP_CLI",
                            "type": "::"
                        },
                        {
                            "file": "phar:\\/\\/\\/usr\\/local\\/bin\\/wp\\/vendor\\/wp-cli\\/wp-cli\\/php\\/WP_CLI\\/Runner.php",
                            "line": 1254,
                            "function": "load_wordpress",
                            "class": "WP_CLI\\\\Runner",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "169": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema::$image_attachment_schema is deprecated",
                    "error_file": "V1\\/CheckoutSchema.php",
                    "error_line": 51,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/SchemaController.php",
                            "line": 72,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/RoutesController.php",
                            "line": 91,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\SchemaController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/RoutesController.php",
                            "line": 107,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\RoutesController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/RoutesController.php",
                            "line": 68,
                            "function": "register_routes",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\RoutesController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/StoreApi.php",
                            "line": 28,
                            "function": "register_all_routes",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\RoutesController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "Automattic\\\\WooCommerce\\\\StoreApi\\\\{closure}",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\StoreApi",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "170": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_Paypal::$testmode is deprecated",
                    "error_file": "paypal\\/class-wc-gateway-paypal.php",
                    "error_line": 60,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 233,
                            "function": "__construct",
                            "class": "WC_Gateway_Paypal",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 83,
                            "function": "should_load_paypal_standard",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "171": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_Paypal::$debug is deprecated",
                    "error_file": "paypal\\/class-wc-gateway-paypal.php",
                    "error_line": 61,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 233,
                            "function": "__construct",
                            "class": "WC_Gateway_Paypal",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 83,
                            "function": "should_load_paypal_standard",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "172": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_Paypal::$email is deprecated",
                    "error_file": "paypal\\/class-wc-gateway-paypal.php",
                    "error_line": 62,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 233,
                            "function": "__construct",
                            "class": "WC_Gateway_Paypal",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 83,
                            "function": "should_load_paypal_standard",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "173": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_Paypal::$receiver_email is deprecated",
                    "error_file": "paypal\\/class-wc-gateway-paypal.php",
                    "error_line": 63,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 233,
                            "function": "__construct",
                            "class": "WC_Gateway_Paypal",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 83,
                            "function": "should_load_paypal_standard",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "174": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_Paypal::$identity_token is deprecated",
                    "error_file": "paypal\\/class-wc-gateway-paypal.php",
                    "error_line": 64,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 233,
                            "function": "__construct",
                            "class": "WC_Gateway_Paypal",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 83,
                            "function": "should_load_paypal_standard",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "175": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_BACS::$instructions is deprecated",
                    "error_file": "bacs\\/class-wc-gateway-bacs.php",
                    "error_line": 49,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 97,
                            "function": "__construct",
                            "class": "WC_Gateway_BACS",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/AbstractSchema.php",
                            "line": 62,
                            "function": "get_properties",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "176": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_BACS::$account_details is deprecated",
                    "error_file": "bacs\\/class-wc-gateway-bacs.php",
                    "error_line": 52,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 97,
                            "function": "__construct",
                            "class": "WC_Gateway_BACS",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/AbstractSchema.php",
                            "line": 62,
                            "function": "get_properties",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "177": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_Cheque::$instructions is deprecated",
                    "error_file": "cheque\\/class-wc-gateway-cheque.php",
                    "error_line": 41,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 97,
                            "function": "__construct",
                            "class": "WC_Gateway_Cheque",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/AbstractSchema.php",
                            "line": 62,
                            "function": "get_properties",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "178": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_COD::$instructions is deprecated",
                    "error_file": "cod\\/class-wc-gateway-cod.php",
                    "error_line": 40,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 97,
                            "function": "__construct",
                            "class": "WC_Gateway_COD",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/AbstractSchema.php",
                            "line": 62,
                            "function": "get_properties",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "179": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_COD::$enable_for_methods is deprecated",
                    "error_file": "cod\\/class-wc-gateway-cod.php",
                    "error_line": 41,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 97,
                            "function": "__construct",
                            "class": "WC_Gateway_COD",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/AbstractSchema.php",
                            "line": 62,
                            "function": "get_properties",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "180": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Gateway_COD::$enable_for_virtual is deprecated",
                    "error_file": "cod\\/class-wc-gateway-cod.php",
                    "error_line": 42,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 97,
                            "function": "__construct",
                            "class": "WC_Gateway_COD",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 70,
                            "function": "init",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-payment-gateways.php",
                            "line": 43,
                            "function": "__construct",
                            "class": "WC_Payment_Gateways",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 932,
                            "function": "instance",
                            "class": "WC_Payment_Gateways",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-woocommerce.php",
                            "line": 174,
                            "function": "payment_gateways",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/CheckoutSchema.php",
                            "line": 115,
                            "function": "__get",
                            "class": "WooCommerce",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/Schemas\\/V1\\/AbstractSchema.php",
                            "line": 62,
                            "function": "get_properties",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "181": {
                    "activated_alongside": "",
                    "context": "WP-CLI Plugin Activation",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema::$image_attachment_schema is deprecated",
                    "error_file": "V1\\/CheckoutSchema.php",
                    "error_line": 51,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/SchemaController.php",
                            "line": 72,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\Schemas\\\\V1\\\\CheckoutSchema",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/RoutesController.php",
                            "line": 91,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\SchemaController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/RoutesController.php",
                            "line": 107,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\RoutesController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/RoutesController.php",
                            "line": 69,
                            "function": "register_routes",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\RoutesController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/packages\\/woocommerce-blocks\\/src\\/StoreApi\\/StoreApi.php",
                            "line": 28,
                            "function": "register_all_routes",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\RoutesController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "Automattic\\\\WooCommerce\\\\StoreApi\\\\{closure}",
                            "class": "Automattic\\\\WooCommerce\\\\StoreApi\\\\StoreApi",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "182": {
                    "activated_alongside": "",
                    "context": "\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderTableMigrator.php",
                    "error_line": 25,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 44,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/ExtendedContainer.php",
                            "line": 117,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Container",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "183": {
                    "activated_alongside": "",
                    "context": "\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                    "error_line": 42,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                            "line": 31,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 45,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "184": {
                    "activated_alongside": "",
                    "context": "\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                    "error_line": 42,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                            "line": 31,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 46,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "185": {
                    "activated_alongside": "",
                    "context": "\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderOpTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderOpTableMigrator.php",
                    "error_line": 26,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderOpTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 47,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/ExtendedContainer.php",
                            "line": 117,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Container",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "186": {
                    "activated_alongside": "",
                    "context": "\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostMetaToOrderMetaMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostMetaToOrderMetaMigrator.php",
                    "error_line": 43,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToMetaTableMigrator.php",
                            "line": 60,
                            "function": "get_meta_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostMetaToOrderMetaMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostMetaToOrderMetaMigrator.php",
                            "line": 32,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToMetaTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 48,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostMetaToOrderMetaMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "187": {
                    "activated_alongside": "",
                    "context": "\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Countries::$countries is deprecated",
                    "error_file": "includes\\/class-wc-countries.php",
                    "error_line": 51,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-countries.php",
                            "line": 38,
                            "function": "get_countries",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-countries.php",
                            "line": 250,
                            "function": "__get",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/wc-core-functions.php",
                            "line": 1353,
                            "function": "get_allowed_countries",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/data-stores\\/class-wc-customer-data-store-session.php",
                            "line": 129,
                            "function": "wc_get_customer_default_location"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/data-stores\\/class-wc-customer-data-store-session.php",
                            "line": 118,
                            "function": "set_defaults",
                            "class": "WC_Customer_Data_Store_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-data-store.php",
                            "line": 159,
                            "function": "read",
                            "class": "WC_Customer_Data_Store_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-customer.php",
                            "line": 125,
                            "function": "read",
                            "class": "WC_Data_Store",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "188": {
                    "activated_alongside": "",
                    "context": "\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property SUT\\\\BarUser::$bar is deprecated",
                    "error_file": "woocommerce-product-feeds\\/woocommerce-product-feeds.php",
                    "error_line": 28,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "SUT\\\\{closure}"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-settings.php",
                            "line": 617,
                            "function": "do_action"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-config.php",
                            "line": 108,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-settings.php"
                            ],
                            "function": "require_once"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-load.php",
                            "line": 50,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-config.php"
                            ],
                            "function": "require_once"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-blog-header.php",
                            "line": 13,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-load.php"
                            ],
                            "function": "require_once"
                        }
                    ],
                    "db_error": ""
                },
                "189": {
                    "activated_alongside": "",
                    "context": "\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Cart::$coupon_discount_totals is deprecated",
                    "error_file": "legacy\\/class-wc-legacy-cart.php",
                    "error_line": 266,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart.php",
                            "line": 404,
                            "function": "__set",
                            "class": "WC_Legacy_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart-session.php",
                            "line": 88,
                            "function": "set_coupon_discount_totals",
                            "class": "WC_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "get_cart_from_session",
                            "class": "WC_Cart_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-settings.php",
                            "line": 639,
                            "function": "do_action"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-config.php",
                            "line": 108,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-settings.php"
                            ],
                            "function": "require_once"
                        }
                    ],
                    "db_error": ""
                },
                "190": {
                    "activated_alongside": "",
                    "context": "\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Cart::$coupon_discount_tax_totals is deprecated",
                    "error_file": "legacy\\/class-wc-legacy-cart.php",
                    "error_line": 266,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart.php",
                            "line": 413,
                            "function": "__set",
                            "class": "WC_Legacy_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart-session.php",
                            "line": 89,
                            "function": "set_coupon_discount_tax_totals",
                            "class": "WC_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "get_cart_from_session",
                            "class": "WC_Cart_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-settings.php",
                            "line": 639,
                            "function": "do_action"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-config.php",
                            "line": 108,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-settings.php"
                            ],
                            "function": "require_once"
                        }
                    ],
                    "db_error": ""
                },
                "191": {
                    "activated_alongside": "",
                    "context": "\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Function utf8_encode() is deprecated",
                    "error_file": "woocommerce-product-feeds\\/woocommerce-product-feeds.php",
                    "error_line": 37,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "SUT\\\\{closure}"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 565,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp.php",
                            "line": 797,
                            "function": "do_action_ref_array"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/functions.php",
                            "line": 1332,
                            "function": "main",
                            "class": "WP",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-blog-header.php",
                            "line": 16,
                            "function": "wp"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/index.php",
                            "line": 17,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-blog-header.php"
                            ],
                            "function": "require"
                        }
                    ],
                    "db_error": ""
                },
                "192": {
                    "activated_alongside": "",
                    "context": "\\/cart\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderTableMigrator.php",
                    "error_line": 25,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 44,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/ExtendedContainer.php",
                            "line": 117,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Container",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "193": {
                    "activated_alongside": "",
                    "context": "\\/cart\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                    "error_line": 42,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                            "line": 31,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 45,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "194": {
                    "activated_alongside": "",
                    "context": "\\/cart\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                    "error_line": 42,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                            "line": 31,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 46,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "195": {
                    "activated_alongside": "",
                    "context": "\\/cart\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderOpTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderOpTableMigrator.php",
                    "error_line": 26,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderOpTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 47,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/ExtendedContainer.php",
                            "line": 117,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Container",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "196": {
                    "activated_alongside": "",
                    "context": "\\/cart\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostMetaToOrderMetaMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostMetaToOrderMetaMigrator.php",
                    "error_line": 43,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToMetaTableMigrator.php",
                            "line": 60,
                            "function": "get_meta_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostMetaToOrderMetaMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostMetaToOrderMetaMigrator.php",
                            "line": 32,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToMetaTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 48,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostMetaToOrderMetaMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "197": {
                    "activated_alongside": "",
                    "context": "\\/cart\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Countries::$countries is deprecated",
                    "error_file": "includes\\/class-wc-countries.php",
                    "error_line": 51,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-countries.php",
                            "line": 38,
                            "function": "get_countries",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-countries.php",
                            "line": 250,
                            "function": "__get",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/wc-core-functions.php",
                            "line": 1353,
                            "function": "get_allowed_countries",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/data-stores\\/class-wc-customer-data-store-session.php",
                            "line": 129,
                            "function": "wc_get_customer_default_location"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/data-stores\\/class-wc-customer-data-store-session.php",
                            "line": 118,
                            "function": "set_defaults",
                            "class": "WC_Customer_Data_Store_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-data-store.php",
                            "line": 159,
                            "function": "read",
                            "class": "WC_Customer_Data_Store_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-customer.php",
                            "line": 125,
                            "function": "read",
                            "class": "WC_Data_Store",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "198": {
                    "activated_alongside": "",
                    "context": "\\/cart\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property SUT\\\\BarUser::$bar is deprecated",
                    "error_file": "woocommerce-product-feeds\\/woocommerce-product-feeds.php",
                    "error_line": 28,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "SUT\\\\{closure}"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-settings.php",
                            "line": 617,
                            "function": "do_action"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-config.php",
                            "line": 108,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-settings.php"
                            ],
                            "function": "require_once"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-load.php",
                            "line": 50,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-config.php"
                            ],
                            "function": "require_once"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-blog-header.php",
                            "line": 13,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-load.php"
                            ],
                            "function": "require_once"
                        }
                    ],
                    "db_error": ""
                },
                "199": {
                    "activated_alongside": "",
                    "context": "\\/cart\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Cart::$coupon_discount_totals is deprecated",
                    "error_file": "legacy\\/class-wc-legacy-cart.php",
                    "error_line": 266,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart.php",
                            "line": 404,
                            "function": "__set",
                            "class": "WC_Legacy_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart-session.php",
                            "line": 88,
                            "function": "set_coupon_discount_totals",
                            "class": "WC_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "get_cart_from_session",
                            "class": "WC_Cart_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-settings.php",
                            "line": 639,
                            "function": "do_action"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-config.php",
                            "line": 108,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-settings.php"
                            ],
                            "function": "require_once"
                        }
                    ],
                    "db_error": ""
                },
                "200": {
                    "activated_alongside": "",
                    "context": "\\/cart\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Cart::$coupon_discount_tax_totals is deprecated",
                    "error_file": "legacy\\/class-wc-legacy-cart.php",
                    "error_line": 266,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart.php",
                            "line": 413,
                            "function": "__set",
                            "class": "WC_Legacy_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart-session.php",
                            "line": 89,
                            "function": "set_coupon_discount_tax_totals",
                            "class": "WC_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "get_cart_from_session",
                            "class": "WC_Cart_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-settings.php",
                            "line": 639,
                            "function": "do_action"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-config.php",
                            "line": 108,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-settings.php"
                            ],
                            "function": "require_once"
                        }
                    ],
                    "db_error": ""
                },
                "201": {
                    "activated_alongside": "",
                    "context": "\\/cart\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Function utf8_encode() is deprecated",
                    "error_file": "woocommerce-product-feeds\\/woocommerce-product-feeds.php",
                    "error_line": 37,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "SUT\\\\{closure}"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 565,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp.php",
                            "line": 797,
                            "function": "do_action_ref_array"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/functions.php",
                            "line": 1332,
                            "function": "main",
                            "class": "WP",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-blog-header.php",
                            "line": 16,
                            "function": "wp"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/index.php",
                            "line": 17,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-blog-header.php"
                            ],
                            "function": "require"
                        }
                    ],
                    "db_error": ""
                },
                "202": {
                    "activated_alongside": "",
                    "context": "\\/cart\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Countries::$states is deprecated",
                    "error_file": "includes\\/class-wc-countries.php",
                    "error_line": 169,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-countries.php",
                            "line": 40,
                            "function": "get_states",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-countries.php",
                            "line": 314,
                            "function": "__get",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-frontend-scripts.php",
                            "line": 597,
                            "function": "get_allowed_country_states",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-frontend-scripts.php",
                            "line": 466,
                            "function": "get_script_data",
                            "class": "WC_Frontend_Scripts",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-frontend-scripts.php",
                            "line": 633,
                            "function": "localize_script",
                            "class": "WC_Frontend_Scripts",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "localize_printed_scripts",
                            "class": "WC_Frontend_Scripts",
                            "type": "::"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "203": {
                    "activated_alongside": "",
                    "context": "\\/my-account\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderTableMigrator.php",
                    "error_line": 25,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 44,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/ExtendedContainer.php",
                            "line": 117,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Container",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "204": {
                    "activated_alongside": "",
                    "context": "\\/my-account\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                    "error_line": 42,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                            "line": 31,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 45,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "205": {
                    "activated_alongside": "",
                    "context": "\\/my-account\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                    "error_line": 42,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostToOrderAddressTableMigrator.php",
                            "line": 31,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 46,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderAddressTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "206": {
                    "activated_alongside": "",
                    "context": "\\/my-account\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderOpTableMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostToOrderOpTableMigrator.php",
                    "error_line": 26,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToCustomTableMigrator.php",
                            "line": 41,
                            "function": "get_schema_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostToOrderOpTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 47,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToCustomTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/ExtendedContainer.php",
                            "line": 117,
                            "function": "get",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Container",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "207": {
                    "activated_alongside": "",
                    "context": "\\/my-account\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostMetaToOrderMetaMigrator::$table_names is deprecated",
                    "error_file": "CustomOrderTable\\/PostMetaToOrderMetaMigrator.php",
                    "error_line": 43,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/MetaToMetaTableMigrator.php",
                            "line": 60,
                            "function": "get_meta_config",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostMetaToOrderMetaMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostMetaToOrderMetaMigrator.php",
                            "line": 32,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\MetaToMetaTableMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Database\\/Migrations\\/CustomOrderTable\\/PostsToOrdersMigrationController.php",
                            "line": 48,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostMetaToOrderMetaMigrator",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/src\\/Internal\\/DependencyManagement\\/Definition.php",
                            "line": 29,
                            "function": "__construct",
                            "class": "Automattic\\\\WooCommerce\\\\Database\\\\Migrations\\\\CustomOrderTable\\\\PostsToOrdersMigrationController",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/Definition.php",
                            "line": 212,
                            "function": "resolveClass",
                            "class": "Automattic\\\\WooCommerce\\\\Internal\\\\DependencyManagement\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Definition\\/DefinitionAggregate.php",
                            "line": 94,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\Definition",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/lib\\/packages\\/League\\/Container\\/Container.php",
                            "line": 157,
                            "function": "resolve",
                            "class": "Automattic\\\\WooCommerce\\\\Vendor\\\\League\\\\Container\\\\Definition\\\\DefinitionAggregate",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "208": {
                    "activated_alongside": "",
                    "context": "\\/my-account\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Countries::$countries is deprecated",
                    "error_file": "includes\\/class-wc-countries.php",
                    "error_line": 51,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-countries.php",
                            "line": 38,
                            "function": "get_countries",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-countries.php",
                            "line": 250,
                            "function": "__get",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/wc-core-functions.php",
                            "line": 1353,
                            "function": "get_allowed_countries",
                            "class": "WC_Countries",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/data-stores\\/class-wc-customer-data-store-session.php",
                            "line": 129,
                            "function": "wc_get_customer_default_location"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/data-stores\\/class-wc-customer-data-store-session.php",
                            "line": 118,
                            "function": "set_defaults",
                            "class": "WC_Customer_Data_Store_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-data-store.php",
                            "line": 159,
                            "function": "read",
                            "class": "WC_Customer_Data_Store_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-customer.php",
                            "line": 125,
                            "function": "read",
                            "class": "WC_Data_Store",
                            "type": "->"
                        }
                    ],
                    "db_error": ""
                },
                "209": {
                    "activated_alongside": "",
                    "context": "\\/my-account\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property SUT\\\\BarUser::$bar is deprecated",
                    "error_file": "woocommerce-product-feeds\\/woocommerce-product-feeds.php",
                    "error_line": 28,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "SUT\\\\{closure}"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-settings.php",
                            "line": 617,
                            "function": "do_action"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-config.php",
                            "line": 108,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-settings.php"
                            ],
                            "function": "require_once"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-load.php",
                            "line": 50,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-config.php"
                            ],
                            "function": "require_once"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-blog-header.php",
                            "line": 13,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-load.php"
                            ],
                            "function": "require_once"
                        }
                    ],
                    "db_error": ""
                },
                "210": {
                    "activated_alongside": "",
                    "context": "\\/my-account\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Cart::$coupon_discount_totals is deprecated",
                    "error_file": "legacy\\/class-wc-legacy-cart.php",
                    "error_line": 266,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart.php",
                            "line": 404,
                            "function": "__set",
                            "class": "WC_Legacy_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart-session.php",
                            "line": 88,
                            "function": "set_coupon_discount_totals",
                            "class": "WC_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "get_cart_from_session",
                            "class": "WC_Cart_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-settings.php",
                            "line": 639,
                            "function": "do_action"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-config.php",
                            "line": 108,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-settings.php"
                            ],
                            "function": "require_once"
                        }
                    ],
                    "db_error": ""
                },
                "211": {
                    "activated_alongside": "",
                    "context": "\\/my-account\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Creation of dynamic property WC_Cart::$coupon_discount_tax_totals is deprecated",
                    "error_file": "legacy\\/class-wc-legacy-cart.php",
                    "error_line": 266,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart.php",
                            "line": 413,
                            "function": "__set",
                            "class": "WC_Legacy_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-content\\/plugins\\/woocommerce\\/includes\\/class-wc-cart-session.php",
                            "line": 89,
                            "function": "set_coupon_discount_tax_totals",
                            "class": "WC_Cart",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "get_cart_from_session",
                            "class": "WC_Cart_Session",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 517,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-settings.php",
                            "line": 639,
                            "function": "do_action"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-config.php",
                            "line": 108,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-settings.php"
                            ],
                            "function": "require_once"
                        }
                    ],
                    "db_error": ""
                },
                "212": {
                    "activated_alongside": "",
                    "context": "\\/my-account\\/",
                    "is_fatal": "No",
                    "error_type": "E_DEPRECATED",
                    "error_message": "Function utf8_encode() is deprecated",
                    "error_file": "woocommerce-product-feeds\\/woocommerce-product-feeds.php",
                    "error_line": 37,
                    "backtrace": [
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 308,
                            "function": "SUT\\\\{closure}"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp-hook.php",
                            "line": 332,
                            "function": "apply_filters",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/plugin.php",
                            "line": 565,
                            "function": "do_action",
                            "class": "WP_Hook",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/class-wp.php",
                            "line": 797,
                            "function": "do_action_ref_array"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-includes\\/functions.php",
                            "line": 1332,
                            "function": "main",
                            "class": "WP",
                            "type": "->"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/wp-blog-header.php",
                            "line": 16,
                            "function": "wp"
                        },
                        {
                            "file": "\\/var\\/www\\/html\\/index.php",
                            "line": 17,
                            "args": [
                                "\\/var\\/www\\/html\\/wp-blog-header.php"
                            ],
                            "function": "require"
                        }
                    ],
                    "db_error": ""
                }
            }
        }
    ]
]';
