SELECT
		u.name,
		count(p.id) as phone_count
FROM
		users AS u
		JOIN phone_numbers AS p ON (p.user_id = u.id)
WHERE
		u.gender = 2
		AND u.birth_date BETWEEN UNIX_TIMESTAMP(DATE_SUB(CURDATE(), INTERVAL 22 YEAR)) AND UNIX_TIMESTAMP(DATE_SUB(CURDATE(), INTERVAL 18 YEAR))
GROUP BY
		u.name;