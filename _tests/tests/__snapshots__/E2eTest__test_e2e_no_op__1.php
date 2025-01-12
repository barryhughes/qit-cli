<?php return '[
    [
        {
            "run_id": 123456,
            "test_type": "e2e",
            "wordpress_version": "6.0.0-normalized",
            "woocommerce_version": "6.0.0-normalized",
            "php_version": "7.4",
            "additional_woo_plugins": [],
            "additional_wp_plugins": [],
            "test_log": "",
            "status": "success",
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
            "test_summary": "Test Suites: 0 skipped, 0 failed, 42 passed, 42 total | Tests: 8 skipped, 0 failed, 179 passed, 187 total.",
            "version": "Zip",
            "test_result_json_extracted": "{EXTRACTED}",
            "debug_log_extracted": "{EXTRACTED}"
        },
        {
            "test_result_json": {
                "numFailedTestSuites": 0,
                "numPassedTestSuites": 42,
                "numPendingTestSuites": 0,
                "numTotalTestSuites": 42,
                "numFailedTests": 0,
                "numPassedTests": 179,
                "numPendingTests": 8,
                "numTotalTests": 187,
                "testResults": [
                    {
                        "file": "activate-and-setup\\/basic-setup.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Store owner can finish initial store setup": [
                                {
                                    "title": "can enable tax rates and calculations",
                                    "status": "passed"
                                },
                                {
                                    "title": "can configure permalink settings",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "activate-and-setup\\/complete-onboarding-wizard.spec.js",
                        "status": "passed",
                        "has_pending": true,
                        "tests": {
                            "Store owner can complete onboarding wizard": [
                                {
                                    "title": "can complete the \\"Store Details\\" section",
                                    "status": "passed"
                                },
                                {
                                    "title": "can complete the industry section",
                                    "status": "passed"
                                },
                                {
                                    "title": "can save industry changes when navigating back to \\"Store Details\\"",
                                    "status": "passed"
                                },
                                {
                                    "title": "can discard industry changes when navigating back to \\"Store Details\\"",
                                    "status": "passed"
                                },
                                {
                                    "title": "can complete the product types section",
                                    "status": "passed"
                                },
                                {
                                    "title": "can complete the business section",
                                    "status": "passed"
                                },
                                {
                                    "title": "can unselect all business features and continue",
                                    "status": "pending"
                                }
                            ],
                            "A Liberian store can complete the selective bundle install but does not include WCPay.": [
                                {
                                    "title": "can choose the \\"Other\\" industry",
                                    "status": "passed"
                                },
                                {
                                    "title": "can choose not to install any extensions",
                                    "status": "passed"
                                },
                                {
                                    "title": "should display the choose payments task, and not the WC Pay task",
                                    "status": "pending"
                                }
                            ],
                            "Store owner can go through setup Task List": [
                                {
                                    "title": "can setup shipping",
                                    "status": "pending"
                                }
                            ]
                        }
                    },
                    {
                        "file": "activate-and-setup\\/setup-onboarding.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Store owner can login and make sure WooCommerce is activated": [
                                {
                                    "title": "can make sure WooCommerce is activated.",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "admin-analytics\\/analytics-overview.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Analytics pages": [
                                {
                                    "title": "a user should see 3 sections by default - Performance, Charts, and Leaderboards",
                                    "status": "passed"
                                },
                                {
                                    "title": "should allow a user to remove a section",
                                    "status": "passed"
                                },
                                {
                                    "title": "should allow a user to add a section back in",
                                    "status": "passed"
                                }
                            ],
                            "Analytics pages > moving sections": [
                                {
                                    "title": "should not display move up for the top, or move down for the bottom section",
                                    "status": "passed"
                                },
                                {
                                    "title": "should allow a user to move a section down",
                                    "status": "passed"
                                },
                                {
                                    "title": "should allow a user to move a section up",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "admin-analytics\\/analytics.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Analytics pages": [
                                {
                                    "title": "A user can view the Overview page without it crashing",
                                    "status": "passed"
                                },
                                {
                                    "title": "A user can view the Products page without it crashing",
                                    "status": "passed"
                                },
                                {
                                    "title": "A user can view the Revenue page without it crashing",
                                    "status": "passed"
                                },
                                {
                                    "title": "A user can view the Orders page without it crashing",
                                    "status": "passed"
                                },
                                {
                                    "title": "A user can view the Variations page without it crashing",
                                    "status": "passed"
                                },
                                {
                                    "title": "A user can view the Categories page without it crashing",
                                    "status": "passed"
                                },
                                {
                                    "title": "A user can view the Coupons page without it crashing",
                                    "status": "passed"
                                },
                                {
                                    "title": "A user can view the Taxes page without it crashing",
                                    "status": "passed"
                                },
                                {
                                    "title": "A user can view the Downloads page without it crashing",
                                    "status": "passed"
                                },
                                {
                                    "title": "A user can view the Stock page without it crashing",
                                    "status": "passed"
                                },
                                {
                                    "title": "A user can view the Settings page without it crashing",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "admin-marketing\\/coupons.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Coupons page": [
                                {
                                    "title": "A user can view the coupons overview without it crashing",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "admin-tasks\\/payment.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Payment setup task": [
                                {
                                    "title": "Can visit the payment setup task from the homescreen if the setup wizard has been skipped",
                                    "status": "passed"
                                },
                                {
                                    "title": "Saving valid bank account transfer details enables the payment method",
                                    "status": "passed"
                                },
                                {
                                    "title": "Enabling cash on delivery enables the payment method",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "basic.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "A basic set of tests to ensure WP, wp-admin and my-account load": [
                                {
                                    "title": "Load the home page",
                                    "status": "passed"
                                }
                            ],
                            "A basic set of tests to ensure WP, wp-admin and my-account load > Sign in as admin": [
                                {
                                    "title": "Load wp-admin",
                                    "status": "passed"
                                }
                            ],
                            "A basic set of tests to ensure WP, wp-admin and my-account load > Sign in as customer": [
                                {
                                    "title": "Load customer my account page",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/create-order.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "WooCommerce Orders > Add new order": [
                                {
                                    "title": "can create new order",
                                    "status": "passed"
                                },
                                {
                                    "title": "can create new complex order with multiple product types & tax classes",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/create-shipping-classes.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Merchant can add shipping classes": [
                                {
                                    "title": "can add shipping classes",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/create-shipping-zones.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "WooCommerce Shipping Settings - Add new shipping zone": [
                                {
                                    "title": "add shipping zone for Mayne Island with free Local pickup",
                                    "status": "passed"
                                },
                                {
                                    "title": "add shipping zone for British Columbia with Free shipping",
                                    "status": "passed"
                                },
                                {
                                    "title": "add shipping zone for Canada with Flat rate",
                                    "status": "passed"
                                },
                                {
                                    "title": "add shipping zone with region and then delete the region",
                                    "status": "passed"
                                }
                            ],
                            "Verifies shipping options from customer perspective": [
                                {
                                    "title": "allows customer to benefit from a free Local pickup if on Mayne Island",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows customer to benefit from a free Free shipping if in BC",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows customer to pay for a Flat rate shipping method",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/create-simple-product.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Add New Simple Product Page": [
                                {
                                    "title": "can create simple virtual product",
                                    "status": "passed"
                                },
                                {
                                    "title": "can have a shopper add the simple virtual product to the cart",
                                    "status": "passed"
                                },
                                {
                                    "title": "can create simple non-virtual product",
                                    "status": "passed"
                                },
                                {
                                    "title": "can have a shopper add the simple non-virtual product to the cart",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/customer-payment-page.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "WooCommerce Merchant Flow: Orders > Customer Payment Page": [
                                {
                                    "title": "should show the customer payment page link on a pending order",
                                    "status": "passed"
                                },
                                {
                                    "title": "should load the customer payment page",
                                    "status": "passed"
                                },
                                {
                                    "title": "can pay for the order through the customer payment page",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/order-coupon.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "WooCommerce Orders > Apply Coupon": [
                                {
                                    "title": "can apply a coupon",
                                    "status": "passed"
                                },
                                {
                                    "title": "can remove a coupon",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/order-edit.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Edit order": [
                                {
                                    "title": "can view single order",
                                    "status": "passed"
                                },
                                {
                                    "title": "can update order status",
                                    "status": "passed"
                                },
                                {
                                    "title": "can update order details",
                                    "status": "passed"
                                }
                            ],
                            "Edit order > Downloadable product permissions": [
                                {
                                    "title": "can add downloadable product permissions to order without product",
                                    "status": "passed"
                                },
                                {
                                    "title": "can add downloadable product permissions to order with product",
                                    "status": "passed"
                                },
                                {
                                    "title": "can edit downloadable product permissions",
                                    "status": "passed"
                                },
                                {
                                    "title": "can revoke downloadable product permissions",
                                    "status": "passed"
                                },
                                {
                                    "title": "should not allow downloading a product if download attempts are exceeded",
                                    "status": "passed"
                                },
                                {
                                    "title": "should not allow downloading a product if expiration date has passed",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/order-emails.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Merchant > Order Action emails received": [
                                {
                                    "title": "can receive new order email",
                                    "status": "passed"
                                },
                                {
                                    "title": "can resend new order notification",
                                    "status": "passed"
                                },
                                {
                                    "title": "can email invoice\\/order details to customer",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/order-refund.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "WooCommerce Orders > Refund an order": [
                                {
                                    "title": "can issue a refund by quantity",
                                    "status": "passed"
                                },
                                {
                                    "title": "can delete an issued refund",
                                    "status": "passed"
                                }
                            ],
                            "WooCommerce Orders > Refund and restock an order item": [
                                {
                                    "title": "can update order after refunding item without automatic stock adjustment",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/order-search.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "WooCommerce Orders > Search orders": [
                                {
                                    "title": "can search for order by order id",
                                    "status": "passed"
                                },
                                {
                                    "title": "can search for order containing \\"James\\" as the billing first name",
                                    "status": "passed"
                                },
                                {
                                    "title": "can search for order containing \\"Doe\\" as the billing last name",
                                    "status": "passed"
                                },
                                {
                                    "title": "can search for order containing \\"Automattic\\" as the billing company name",
                                    "status": "passed"
                                },
                                {
                                    "title": "can search for order containing \\"address1\\" as the billing first address",
                                    "status": "passed"
                                },
                                {
                                    "title": "can search for order containing \\"address2\\" as the billing second address",
                                    "status": "passed"
                                },
                                {
                                    "title": "can search for order containing \\"San Francisco\\" as the billing city name",
                                    "status": "passed"
                                },
                                {
                                    "title": "can search for order containing \\"94107\\" as the billing post code",
                                    "status": "passed"
                                },
                                {
                                    "title": "can search for order containing \\"john.doe.ordersearch@example.com\\" as the billing email",
                                    "status": "passed"
                                },
                                {
                                    "title": "can search for order containing \\"123456789\\" as the billing phone",
                                    "status": "passed"
                                },
                                {
                                    "title": "can search for order containing \\"CA\\" as the billing state",
                                    "status": "passed"
                                },
                                {
                                    "title": "can search for order containing \\"Tim\\" as the shipping first name",
                                    "status": "passed"
                                },
                                {
                                    "title": "can search for order containing \\"Clark\\" as the shipping last name",
                                    "status": "passed"
                                },
                                {
                                    "title": "can search for order containing \\"Oxford Ave\\" as the shipping first address",
                                    "status": "passed"
                                },
                                {
                                    "title": "can search for order containing \\"Linwood Ave\\" as the shipping second address",
                                    "status": "passed"
                                },
                                {
                                    "title": "can search for order containing \\"Buffalo\\" as the shipping city name",
                                    "status": "passed"
                                },
                                {
                                    "title": "can search for order containing \\"14201\\" as the shipping post code",
                                    "status": "passed"
                                },
                                {
                                    "title": "can search for order containing \\"Wanted Product\\" as the shipping item name",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/order-status-filter.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "WooCommerce Orders > Filter Order by Status": [
                                {
                                    "title": "should filter by All",
                                    "status": "passed"
                                },
                                {
                                    "title": "should filter by Pending payment",
                                    "status": "passed"
                                },
                                {
                                    "title": "should filter by Processing",
                                    "status": "passed"
                                },
                                {
                                    "title": "should filter by On hold",
                                    "status": "passed"
                                },
                                {
                                    "title": "should filter by Completed",
                                    "status": "passed"
                                },
                                {
                                    "title": "should filter by Cancelled",
                                    "status": "passed"
                                },
                                {
                                    "title": "should filter by Refunded",
                                    "status": "passed"
                                },
                                {
                                    "title": "should filter by Failed",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/page-loads.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "WooCommerce Page Load > Load WooCommerce sub pages": [
                                {
                                    "title": "Can load Home",
                                    "status": "passed"
                                },
                                {
                                    "title": "Can load Orders",
                                    "status": "passed"
                                },
                                {
                                    "title": "Can load Customers",
                                    "status": "passed"
                                },
                                {
                                    "title": "Can load Coupons",
                                    "status": "passed"
                                },
                                {
                                    "title": "Can load Reports",
                                    "status": "passed"
                                },
                                {
                                    "title": "Can load Settings",
                                    "status": "passed"
                                },
                                {
                                    "title": "Can load Status",
                                    "status": "passed"
                                }
                            ],
                            "WooCommerce Page Load > Load Products sub pages": [
                                {
                                    "title": "Can load All Products",
                                    "status": "passed"
                                },
                                {
                                    "title": "Can load Add New",
                                    "status": "passed"
                                },
                                {
                                    "title": "Can load Categories",
                                    "status": "passed"
                                },
                                {
                                    "title": "Can load Tags",
                                    "status": "passed"
                                },
                                {
                                    "title": "Can load Attributes",
                                    "status": "passed"
                                }
                            ],
                            "WooCommerce Page Load > Load Marketing sub pages": [
                                {
                                    "title": "Can load Overview",
                                    "status": "passed"
                                },
                                {
                                    "title": "Can load Coupons",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/product-edit.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Products > Edit Product": [
                                {
                                    "title": "can edit a product and save the changes",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/product-import-csv.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Import Products from a CSV file": [
                                {
                                    "title": "should show error message if you go without providing CSV file",
                                    "status": "passed"
                                },
                                {
                                    "title": "can upload the CSV file and import products",
                                    "status": "passed"
                                },
                                {
                                    "title": "can override the existing products via CSV import",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/product-search.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Products > Search and View a product": [
                                {
                                    "title": "can do a partial search for a product",
                                    "status": "passed"
                                },
                                {
                                    "title": "can view a product\'s details after search",
                                    "status": "passed"
                                },
                                {
                                    "title": "returns no results for non-existent product search",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/product-settings.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "WooCommerce Products > Downloadable Product Settings": [
                                {
                                    "title": "can update settings",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/settings-general.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "WooCommerce General Settings": [
                                {
                                    "title": "can update settings",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "merchant\\/settings-tax.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "WooCommerce Tax Settings > enable": [
                                {
                                    "title": "can enable tax calculation",
                                    "status": "passed"
                                }
                            ],
                            "WooCommerce Tax Settings": [
                                {
                                    "title": "can set tax options",
                                    "status": "passed"
                                },
                                {
                                    "title": "can add tax classes",
                                    "status": "passed"
                                },
                                {
                                    "title": "can set rate settings",
                                    "status": "passed"
                                },
                                {
                                    "title": "can remove tax classes",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "new-product-editor\\/new-product-editor.spec.js",
                        "status": "passed",
                        "has_pending": true,
                        "tests": {
                            "New product editor": [],
                            "New product editor > Default (disabled)": [
                                {
                                    "title": "is feature flag disabled",
                                    "status": "passed"
                                },
                                {
                                    "title": "is not hooked up to sidebar \\"Add New\\"",
                                    "status": "passed"
                                }
                            ],
                            "New product editor > Enabled": [
                                {
                                    "title": "is feature flag enabled",
                                    "status": "pending"
                                },
                                {
                                    "title": "is hooked up to sidebar \\"Add New\\"",
                                    "status": "pending"
                                },
                                {
                                    "title": "can be disabled from the header",
                                    "status": "pending"
                                },
                                {
                                    "title": "can be disabled from the feedback footer",
                                    "status": "pending"
                                }
                            ]
                        }
                    },
                    {
                        "file": "shopper\\/calculate-shipping.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Cart Calculate Shipping": [
                                {
                                    "title": "allows customer to calculate Free Shipping if in Germany",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows customer to calculate Flat rate and Local pickup if in France",
                                    "status": "passed"
                                },
                                {
                                    "title": "should show correct total cart price after updating quantity",
                                    "status": "passed"
                                },
                                {
                                    "title": "should show correct total cart price with 2 products and flat rate",
                                    "status": "passed"
                                },
                                {
                                    "title": "should show correct total cart price with 2 products without flat rate",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "shopper\\/cart-coupons.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Cart applying coupons": [
                                {
                                    "title": "allows cart to apply coupon of type fixed_cart",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows cart to apply coupon of type percent",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows cart to apply coupon of type fixed_product",
                                    "status": "passed"
                                },
                                {
                                    "title": "prevents cart applying same coupon twice",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows cart to apply multiple coupons",
                                    "status": "passed"
                                },
                                {
                                    "title": "restores cart total when coupons are removed",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "shopper\\/cart-redirection.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Cart > Redirect to cart from shop": [
                                {
                                    "title": "can redirect user to cart from shop page",
                                    "status": "passed"
                                },
                                {
                                    "title": "can redirect user to cart from detail page",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "shopper\\/cart.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Cart page": [
                                {
                                    "title": "should display no item in the cart",
                                    "status": "passed"
                                },
                                {
                                    "title": "should add the product to the cart from the shop page",
                                    "status": "passed"
                                },
                                {
                                    "title": "should increase item quantity when \\"Add to cart\\" of the same product is clicked",
                                    "status": "passed"
                                },
                                {
                                    "title": "should update quantity when updated via quantity input",
                                    "status": "passed"
                                },
                                {
                                    "title": "should remove the item from the cart when remove is clicked",
                                    "status": "passed"
                                },
                                {
                                    "title": "should update subtotal in cart totals when adding product to the cart",
                                    "status": "passed"
                                },
                                {
                                    "title": "should go to the checkout page when \\"Proceed to Checkout\\" is clicked",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "shopper\\/checkout-coupons.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Checkout coupons": [
                                {
                                    "title": "allows checkout to apply coupon of type fixed_cart",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows checkout to apply coupon of type percent",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows checkout to apply coupon of type fixed_product",
                                    "status": "passed"
                                },
                                {
                                    "title": "prevents checkout applying same coupon twice",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows checkout to apply multiple coupons",
                                    "status": "passed"
                                },
                                {
                                    "title": "restores checkout total when coupons are removed",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "shopper\\/checkout-create-account.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Shopper Checkout Create Account": [
                                {
                                    "title": "can create an account during checkout",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "shopper\\/checkout-login.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Shopper Checkout Login Account": [
                                {
                                    "title": "can login to an existing account during checkout",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "shopper\\/checkout.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Checkout page": [
                                {
                                    "title": "should display cart items in order review",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows customer to choose available payment methods",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows customer to fill billing details",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows customer to fill shipping details",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows guest customer to place an order",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows existing customer to place order",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "shopper\\/my-account-create-account.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Shopper My Account Create Account": [
                                {
                                    "title": "can create a new account via my account",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "shopper\\/my-account-pay-order.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Customer can pay for their order through My Account": [
                                {
                                    "title": "allows customer to pay for their order in My Account",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "shopper\\/my-account.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "My account page": [
                                {
                                    "title": "allows customer to login",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows customer to see Orders page",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows customer to see Downloads page",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows customer to see Addresses page",
                                    "status": "passed"
                                },
                                {
                                    "title": "allows customer to see Account details page",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "shopper\\/product-browse-search-sort.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Search, browse by categories and sort items in the shop": [
                                {
                                    "title": "should let user search the store",
                                    "status": "passed"
                                },
                                {
                                    "title": "should let user browse products by categories",
                                    "status": "passed"
                                },
                                {
                                    "title": "should let user sort the products in the shop",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "shopper\\/single-product.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Single Product Page": [
                                {
                                    "title": "should be able to add simple products to the cart",
                                    "status": "passed"
                                },
                                {
                                    "title": "should be able to remove simple products from the cart",
                                    "status": "passed"
                                }
                            ],
                            "Variable Product Page": [
                                {
                                    "title": "should be able to add variation products to the cart",
                                    "status": "passed"
                                },
                                {
                                    "title": "should be able to remove variation products from the cart",
                                    "status": "passed"
                                }
                            ],
                            "Grouped Product Page": [
                                {
                                    "title": "should be able to add grouped products to the cart",
                                    "status": "passed"
                                },
                                {
                                    "title": "should be able to remove grouped products from the cart",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "shopper\\/variable-product-updates.spec.js",
                        "status": "passed",
                        "has_pending": false,
                        "tests": {
                            "Shopper > Update variable product": [
                                {
                                    "title": "Shopper can change variable attributes to the same value",
                                    "status": "passed"
                                },
                                {
                                    "title": "Shopper can change attributes to combination with dimentions and weight",
                                    "status": "passed"
                                },
                                {
                                    "title": "Shopper can change variable product attributes to variation with a different price",
                                    "status": "passed"
                                },
                                {
                                    "title": "Shopper can reset variations",
                                    "status": "passed"
                                }
                            ]
                        }
                    },
                    {
                        "file": "smoke-tests\\/upload-plugin.spec.js",
                        "status": "passed",
                        "has_pending": true,
                        "tests": {
                            "undefined plugin can be uploaded and activated": [
                                {
                                    "title": "can upload and activate undefined",
                                    "status": "pending"
                                }
                            ]
                        }
                    }
                ],
                "summary": "Test Suites: 0 skipped, 0 failed, 42 passed, 42 total | Tests: 8 skipped, 0 failed, 179 passed, 187 total."
            }
        },
        {
            "debug_log": [
                {
                    "count": "16",
                    "message": "The Automattic\\\\WooCommerce\\\\Admin\\\\API\\\\Options::get_options function is deprecated since version 3.1."
                }
            ]
        }
    ]
]';
