# hwp-upload

to upload .hwp files for Korean

after activating this plugin, you have to input code below in wp-confing.php

한글 파일(hwp)을 워드프레스에 업로드

플러그인을 업로드하고 활성화 시킨 후에 wp-config.php에 아래의 코드를 넣어야 합니다.

워드프레스 4.7 버전부터 바뀐 부분입니다.


define( 'ALLOW_UNFILTERED_UPLOADS', true );

more details : https://eastsocial.co.kr/archives/1497

mime type : https://www.iana.org/assignments/media-types/media-types.xhtml
