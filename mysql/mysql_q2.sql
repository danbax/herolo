SELECT companyName
	,marketCapitalization
FROM fsia

UNION

SELECT companyName
	,sharePrice * shareOutstanding AS marketCapitalization
FROM fsib
ORDER BY marketCapitalization
