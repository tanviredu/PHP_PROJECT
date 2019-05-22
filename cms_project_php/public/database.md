# database descriptoion

# database has three part

## first the 'subjects'

### the subjects of the topic
	-->has id
	-->name
	-->position(to sort in the list)
	-->visible boolian (helps to decide it will either visible or not)

## pages
### consitst of the content of that subjects
	-->pages (foreign key)
	--> content
	-->subject id (for sorting all the same subject)


## admins
### admin section for controlling
	-->id
	--> username
	-->hashed password