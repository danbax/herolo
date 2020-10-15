SELECT width * height AS area
	,count(id) AS count
FROM rectangles
GROUP BY area
