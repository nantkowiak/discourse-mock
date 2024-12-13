# RNext Sandbox
Sandbox for RNext

***
## Installation
Create a copy of `docker-compose.yml.dist`.

```
cp docker-compose.yml.dist docker-compose.yml
```

Modify `docker-compose.yml` with your Network and Nginx-IP.

Save Nginx-IP in `/etc/hosts` for community.sandbox.local

`172.18.112.20 community.sandbox.local`

## Usage via Curl

```shell
curl -X POST http://community.sandbox.local/posts \
-H "Accept: application/json" \
-H "Content-Type: application/json" \
-d '{
    "raw": "<h1>windows is a problem. please solve everything. i am sure im not a layer 8 problem user.</h1>"
}'
```

# Retrieve Community Issue Ticket


http://community.sandbox.local/posts/1734083014
