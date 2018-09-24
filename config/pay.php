<?php

return [
    'alipay' => [
        'app_id'         => '2016092100563332',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAq5FFVPtB9Ea9G/2KhuryYJ+IDPHCtfD8AC2u1N7Hf2ODf7iXBUxiaVd/sb7OkW2HaO8VrhtwPfGs+bETbBh8JgSMKFxygv1EGYrVn3q+lviNMz95kyPGp83cpNWwANzCwlktfBL+NwGlBBG21hXPPqHddolj9HXDuCeyHry2OKmrCFIuVzMAjwhl1/GJ2jreqPGoe0E9M6BFgRFAiunAuRE06cC2ahMcywFxSLfQu+sbPUalbj/rCUOlpITzJEP5kbEQU3EjrQJeid3TYX2bAxAdVF5MaOJx+/Jiv1GEQD+tJOeTGNz7IIjNp4aA3Hwiq630ij1U5n0CYOAM4rl+dwIDAQAB',
        'private_key'    => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0bdtveJ18wopaGKCbigMiEjA9ylJy1Y4NTU5thTC+j0OwKHXsT0REpcYz51hG6biAv58Pf+QYEsqIGkvUDkxo0ZkZIVwEkdiLBJ/IONT/yOhvAMX/iTI/SfY5s9Bvg0ig6NO74TdVbkdakta1N/MawF6IOmV+2GP5+ipkZwYZc3Hx3XUqraMoisYdBAGWXAnRi43id1XV7fNXiaixjFTwGk13CzmR79pRxDcu5hKg3VcF8uE2zF50u85eCjdOeJn9MiRfdXwdxviFg3hqyRi9Q3S9IcQ1EPdWjWBqcI/sJQq4S1KR7fd/c0WZ9wC0ATb7mXGyhy+luJraHTatT/YTQIDAQAB',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];