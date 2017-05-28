# HackerNewsApi

A [HN Api](https://github.com/HackerNews/API) client wrapper for PHP, built to
experiment with [Guzzle services](https://github.com/guzzle/guzzle-services).

## Installation

The package is available through composer:

```Bash
$ composer require mgerarts/hn-api-php
```

## Usage

The client is a wrapper around a Guzzle service definition. It can be
instantiated like this:

```php
<?php

use HackerNewsApi\Service\HackerNewsServiceClient;
use HackerNewsApi\Client\HackerNewsClient;

$client = new HackerNewsClient(HackerNewsServiceClient::create());
```

You can then start making requests:

```php
<?php

$client->getItem(8863);

// Will return:
// HackerNewsApi\Models\Item {#70
//   -id: 8863
//   -deleted: false
//   -type: "story"
//   -by: "dhouston"
//   -time: 1175714200
//   -text: null
//   -dead: false
//   -parent: null
//   -poll: null
//   -kids: array:33 [..]
//   -url: "http://www.getdropbox.com/u/2/screencast.html"
//   -score: 111
//   -title: "My YC app: Dropbox - Throw away your USB drive"
//   -parts: []
//   -descendants: 71
// }
```

A full list of available methods can be found [here](https://github.com/mark-gerarts/hn-api-php/blob/master/src/Client/HackerNewsClientInterface.php).
