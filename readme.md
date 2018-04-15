### Database EER diagram

Please find in email attachment

### Response success

- Http code: 200
- Response:

```
{
    data: {
        id: 1,
        title: "SEVENTEEN Berry Crush Lip Stain (Blushin)",
        brand: "Seventeen",
        price: 90.5,
        purchase_from_id: 1,
        deal_in_id: 2,
        category_id: 1,
        user_id: 1,
        close_at: null,
        dispatch_date: null,
        description: "Desciption here",
        slug: "LALMV8-Beauty-Products-SEVENTEEN-Berry-Crush-Lip-Stain-(Blushin)",
        main_image: "https://s3.aws.abc/preorder/main_image/thumbnail/asdf2-adsf3-rhytr.jpg",
        shows: 900,
        is_pair_deal: 0,
        status: "active",
        meta_title: null,
        meta_description: null,
        created_at: null,
        updated_at: null,
        deleted_at: null,
        category: {
            id: 1,
            name: "Beauty",
            created_at: null,
            updated_at: null
        },
        comments: [
            {
                id: 1,
                parent_id: null,
                body: "good item",
                commentable_type: "App\Models\PreOrder",
                commentable_id: 1,
                created_at: null,
                updated_at: null,
                user_id: 2
            },
            {
                id: 2,
                parent_id: 1,
                body: "thanks you",
                commentable_type: "App\Models\PreOrder",
                commentable_id: 1,
                created_at: null,
                updated_at: null,
                user_id: 1
            }
        ],
        medias: [
            {
                id: 1,
                name: "https://s3.aws.abc/preorder/iamges/thumbnail/afdsjk-fdsakjn-124fdas.jpg",
                type: 1,
                mediable_type: "App\Models\PreOrder",
                mediable_id: 1,
                created_at: null,
                updated_at: null
            },
            {
                id: 2,
                name: "https://s3.aws.abc/preorder/iamges/thumbnail/afdsjk-fdsakjn-adfdas.mp4",
                type: 2,
                mediable_type: "App\Models\PreOrder",
                mediable_id: 1,
                created_at: null,
                updated_at: null
            }
        ],
        variants: [
            {
                id: 1,
                pre_order_id: 1,
                variant: "Berry Crush Lip Stain",
                sub_variant: "white",
                price: 20,
                pair_deal_price: null,
                quantity: 10,
                in_stock: 9,
                status: 1
            },
            {
                id: 2,
                pre_order_id: 1,
                variant: "Berry Crush Lip Stain",
                sub_variant: "black",
                price: 19,
                pair_deal_price: null,
                quantity: 8,
                in_stock: 0,
                status: 2
            }
        ],
        delivery_options: [
            {
                id: 1,
                name: "Ship ur self",
                detail: "you self shipping",
                pivot: {
                    pre_order_id: 1,
                    delivery_option_id: 1,
                    cost: 9.5
                }
            },
            {
            id: 2,
            name: "Delivery Now",
            detail: "Service",
            pivot: {
                pre_order_id: 1,
                delivery_option_id: 2,
                cost: 3
            }
        }
        ],
        purchase_from: {
            id: 1,
            name: "USA"
        },
        deal_in: {
            id: 2,
            name: "SGP"
        }
    }
}
```

### Queries

```
array:7 [▼
  0 => array:3 [▼
    "query" => "select * from `pre_orders` where `pre_orders`.`id` = ? limit 1"
    "bindings" => array:1 [▼
      0 => "1"
    ]
    "time" => 86.76
  ]
  1 => array:3 [▼
    "query" => "select * from `categories` where `categories`.`id` in (?)"
    "bindings" => array:1 [▼
      0 => 1
    ]
    "time" => 1.18
  ]
  2 => array:3 [▼
    "query" => "select * from `comments` where `comments`.`commentable_id` in (?) and `comments`.`commentable_type` = ?"
    "bindings" => array:2 [▼
      0 => 1
      1 => "App\Models\PreOrder"
    ]
    "time" => 1.33
  ]
  3 => array:3 [▼
    "query" => "select * from `medias` where `medias`.`mediable_id` in (?) and `medias`.`mediable_type` = ?"
    "bindings" => array:2 [▼
      0 => 1
      1 => "App\Models\PreOrder"
    ]
    "time" => 1.12
  ]
  4 => array:3 [▼
    "query" => "select * from `variants` where `variants`.`pre_order_id` in (?)"
    "bindings" => array:1 [▼
      0 => 1
    ]
    "time" => 1.25
  ]
  5 => array:3 [▼
    "query" => "select `delivery_options`.*, `delivery_option_pre_order`.`pre_order_id` as `pivot_pre_order_id`, `delivery_option_pre_order`.`delivery_option_id` as `pivot_delivery_option_id`, `delivery_option_pre_order`.`cost` as `pivot_cost` from `delivery_options` inner join `delivery_option_pre_order` on `delivery_options`.`id` = `delivery_option_pre_order`.`delivery_option_id` where `delivery_option_pre_order`.`pre_order_id` in (?) ◀"
    "bindings" => array:1 [▼
      0 => 1
    ]
    "time" => 2.85
  ]
  6 => array:3 [▼
    "query" => "select * from `countries` where `id` in (?, ?)"
    "bindings" => array:2 [▼
      0 => 1
      1 => 2
    ]
    "time" => 2.11
  ]
]
```