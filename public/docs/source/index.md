---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_09de46a445ee056690bd2ac3e70e5750 -->
## api/authenticate

> Example request:

```bash
curl -X GET "http://localhost/api/authenticate" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/authenticate",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "name": "Ryan Chenkie",
        "email": "ryanchenkie@gmail.com",
        "created_at": "2017-12-27 01:11:03",
        "updated_at": "2017-12-27 01:11:03"
    },
    {
        "id": 2,
        "name": "Chris Sevilleja",
        "email": "chris@gmail.com",
        "created_at": "2017-12-27 01:11:03",
        "updated_at": "2017-12-27 01:11:03"
    },
    {
        "id": 3,
        "name": "Holly Lloyd",
        "email": "holly@gmail.com",
        "created_at": "2017-12-27 01:11:03",
        "updated_at": "2017-12-27 01:11:03"
    },
    {
        "id": 4,
        "name": "Adnan Kukic",
        "email": "adnan@gmail.com",
        "created_at": "2017-12-27 01:11:04",
        "updated_at": "2017-12-27 01:11:04"
    }
]
```

### HTTP Request
`GET api/authenticate`

`HEAD api/authenticate`


<!-- END_09de46a445ee056690bd2ac3e70e5750 -->

<!-- START_4a6a89e9e0eaea9c72ceea57315f2c42 -->
## api/authenticate

> Example request:

```bash
curl -X POST "http://localhost/api/authenticate" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/authenticate",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/authenticate`


<!-- END_4a6a89e9e0eaea9c72ceea57315f2c42 -->

