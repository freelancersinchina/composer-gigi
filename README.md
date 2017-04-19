# gigi-music
a composer package,showing how to create an own package.

## what does the package do ?
this is a tool used to get a random or sequence list of Gigi's songs.it is based on the netease music's api.

## Usage
first,install freelancersinchina/gigi-music.

```
> composer require freelancersinchina/gigi-music
```

second,include the autoload function and enjoy using the gigi-music.

```
require_once("./vendor/autoload.php");
use Gigi;

// get a random list of songs
$songlist = new  GigiMusic(GigiMusic::GigiMusicType_Random);

// or get a sequence list of songs
// $songlist = new GigiMusic(GigiMusic::GigiMusicType_Sequence);

// suppose that we need to get  10 songs
$count = 10;

// get detail infos
$songs = $songlist->getFirst($count);

print_r($songs);
```




