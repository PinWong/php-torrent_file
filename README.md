php-torrent_file
================

use php parse torrent file to a array object

torrent_file : http://en.wikipedia.org/wiki/Torrent_file

test code:
include('./BSONparser.php');

$bt = './aa.torrent';
$bjson = new BSONparser($bt);
$data = $bjson->parser();
var_dump($data);

result code:

array(4) {
  ["announce"]=>
  string(34) "http://bt.ali213.net:8000/announce"
  ["announce-list"]=>
  array(12) {
    [0]=>
    array(1) {
      [0]=>
      string(23) "udp://tracker.ccc.de:80"
    }
    [1]=>
    array(1) {
      [0]=>
      string(28) "udp://tracker.istole.it:6969"
    }
    [2]=>
    array(1) {
      [0]=>
      string(35) "udp://tracker.openbittorrent.com:80"
    }
    [3]=>
    array(1) {
      [0]=>
      string(29) "udp://tracker.publicbt.com:80"
    }
    [4]=>
    array(1) {
      [0]=>
      string(38) "udp://tracker.publicbt.com:80/announce"
    }
    [5]=>
    array(1) {
      [0]=>
      string(39) "http://tracker.publicbt.com:80/announce"
    }
    [6]=>
    array(1) {
      [0]=>
      string(34) "http://tracker.prq.to/announce.php"
    }
    [7]=>
    array(1) {
      [0]=>
      string(30) "http://tracker.prq.to/announce"
    }
    [8]=>
    array(1) {
      [0]=>
      string(34) "http://bt.ali213.net:6969/announce"
    }
    [9]=>
    array(1) {
      [0]=>
      string(34) "http://bt.ali213.net:5858/announce"
    }
    [10]=>
    array(1) {
      [0]=>
      string(34) "http://bt.ali213.net:8080/announce"
    }
    [11]=>
    array(1) {
      [0]=>
      string(34) "http://bt.ali213.net:8000/announce"
    }
  }
  ["comment"]=>
  string(20) "LOVE IT,BUY IT!NOW!!"
  ["info"]=>
  array(4) {
    ["files"]=>
    array(24) {
      [0]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part01.rar"
        }
      }
      [1]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part02.rar"
        }
      }
      [2]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part03.rar"
        }
      }
      [3]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part04.rar"
        }
      }
      [4]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part05.rar"
        }
      }
      [5]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part06.rar"
        }
      }
      [6]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part07.rar"
        }
      }
      [7]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part08.rar"
        }
      }
      [8]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part09.rar"
        }
      }
      [9]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part10.rar"
        }
      }
      [10]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part11.rar"
        }
      }
      [11]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part12.rar"
        }
      }
      [12]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part13.rar"
        }
      }
      [13]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part14.rar"
        }
      }
      [14]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part15.rar"
        }
      }
      [15]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part16.rar"
        }
      }
      [16]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part17.rar"
        }
      }
      [17]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part18.rar"
        }
      }
      [18]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part19.rar"
        }
      }
      [19]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part20.rar"
        }
      }
      [20]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(524288000)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part21.rar"
        }
      }
      [21]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(86307468)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(59) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213.part22.rar"
        }
      }
      [22]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(139264)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(17) "������NETSHOW.exe"
        }
      }
      [23]=>
      array(2) {
        ["length"]=>
        array(1) {
          [0]=>
          int(3079)
        }
        ["path"]=>
        array(1) {
          [0]=>
          string(16) "��Ϸ��������.txt"
        }
      }
    }
    ["name"]=>
    string(48) "Company.of.Heroes.2.CHS.3.0.Green.Edition-ALI213"
    ["piece length"]=>
    array(1) {
      [0]=>
      int(4194304)
    }
    ["pieces"]=>
    string(39) "[52920]4580300e7a9af92c37e915824be7c479"
  }
}
