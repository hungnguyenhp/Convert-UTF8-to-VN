<?php
include 'convertUTF8toVN.php';

// Function convertUTF8toVN được include trong file convertUTF8toVN.php 
// sẽ có tác dụng chuyển đổi 1 số ký tự UTF8 thường gặp khi sử dụng 1 số trình soạn thảo văn bản như tinymce, ckeditor
// Ví dụ &Aacute; => Á, &eacute; => e

// Cách sử dụng: Trước khi output ra trình duyệt, lọc phần output bằng hàm này.
// VD: $string là đoạn output khi cần hiển thị, thì chỉnh thành convertUTF8toVN($string); để được như ý

// Ví dụ thực tiễn

$stringNomal = 'Đoạn mã này là 1 đoạn mã ví dụ được dùng để lọc chuỗi ra.';

// $stringNomal => Khi PUT lên data bằng các trình soạn thảo sẽ ra các ký tự như chuỗi $stringUTF8 dưới đây.

$stringUTF8 = 'Đoạn m&atilde; n&agrave;y l&agrave; 1 đoạn m&atilde; v&iacute; dụ được d&ugrave;ng để lọc chuỗi ra.';

// Để hiển thị chuỗi $stringUTF8 ra ngoài trình duyệt không bị mã hóa (trong source html) thì chỉnh thành như sau.

$stringConvert = convertUTF8toVN($stringUTF8);

echo '<strong>stringNomal</strong>: '.$stringNomal.'<br />';
echo '<strong>stringUTF8</strong>: '.$stringUTF8.'<br />';
echo '<strong>stringConvert</strong>: '.$stringConvert.'<br />';

echo '==> Khi hiển thị ra ngoài màn hình thì giống nhau nhưng trong source sẽ khác nhau. View-source sẽ hiểu :)';

?>