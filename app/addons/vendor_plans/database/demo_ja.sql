REPLACE INTO `?:vendor_plan_descriptions` (`plan_id`, `lang_code`, `plan`, `description`)
VALUES
    (1, 'ja', 'ゴールド', ''),
    (2, 'ja', 'プレミアム', ''),
    (3, 'ja', 'アンリミテッド', ''),
    (4, 'ja', 'エクスクルーシブ', ''),
    (9, 'ja', 'フリー', '');

UPDATE ?:vendor_plans
SET `price`= `price`*100,
`revenue_limit` = `revenue_limit`*100;