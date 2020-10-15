SELECT e.name
	,m.name
FROM employees e
LEFT JOIN employees m ON e.mgrId = m.id;
