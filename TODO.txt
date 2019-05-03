A user should be able to track an arbitrary integer over time.
Each data series is identified by a guid. It will be read/write for anyone having the guid, initially.

Entering the site without a guid in the url will create a new data series. It will not be commited to the data store until a value is entered.
When creating a new series it will be possible to give it a name and a default viewport time span.
To prevent DDoS-ing the database implement a rate limit per guid and per source ip-address.

Entering the site with a guid in the url will show a bar chart where Y is the tracked integers and X is a range for the default viewport time span.
Next: have more guids in the url to view more data series in the same view.


Table Values:
	id	long	pk
	serie	guid	ix not null
	owner	guid	not null	[A guid representing a user for future use. Anon will share a guid]
	entered d/t	not null	[Timestamp for the value]
	value	long	not null	[The value]

Table Series:
	serie	guid	pk
	name 	string	not null
	owner	guid	not null


