first="$1"
second="$2"

output="curl -XPOST 'localhost:9200/customer/_doc?pretty&pretty' -H \
		 'Content-Type: application/json' -d' \
			{ \
  			\"name\": \"$first\", \
  			\"email\":\"$second\"
			} \
			'"
			
eval $output