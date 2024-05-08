Sets inheritance of parent category's hero banner to its descendants for both english and greek. 
- Both language versions should have banner inputs, otherwise nothing will show.
- If current category does not have banner inputs, it will inherit the closest ancestors' inputs (as long as both versions are available).
- FUNCTIONALITY REQUIRES ADDITION OF d4u_bg_image_en AND d4u_bg_image COLUMNS @ DB table "prefix_category".
