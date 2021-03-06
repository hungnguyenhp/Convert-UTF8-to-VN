<?php
/**
@author info@nguyenanhung.com
@target convert 1 doan ky tu UTF8 sang tieng Viet, than thien voi SEO hon
@license Apache 2.0
@function convertUTF8toVN
@filename convertUTF8toVN.php
**/
function convertUTF8toVN($str)
{
	$str = str_replace('&Aacute;', 'Á', $str);
	$str = str_replace('&aacute;', 'á', $str);
	$str = str_replace('&Acirc;', 'Â', $str);
	$str = str_replace('&acirc;', 'â', $str);
	$str = str_replace('&acute;', '´', $str);
	$str = str_replace('&AElig;', 'Æ', $str);
	$str = str_replace('&aelig;', 'æ', $str);
	$str = str_replace('&Agrave;', 'À', $str);
	$str = str_replace('&agrave;', 'à', $str);
	$str = str_replace('&alefsym;', 'ℵ', $str);
	$str = str_replace('&Alpha;', 'Α', $str);
	$str = str_replace('&alpha;', 'α', $str);
	$str = str_replace('&amp;', '&', $str);
	$str = str_replace('&and;', '∧', $str);
	$str = str_replace('&ang;', '∠', $str);
	$str = str_replace('&Aring;', 'Å', $str);
	$str = str_replace('&aring;', 'å', $str);
	$str = str_replace('&asymp;', '≈', $str);
	$str = str_replace('&Atilde;', 'Ã', $str);
	$str = str_replace('&atilde;', 'ã', $str);
	$str = str_replace('&Auml;', 'Ä', $str);
	$str = str_replace('&auml;', 'ä', $str);
	$str = str_replace('&bdquo;', '„', $str);
	$str = str_replace('&Beta;', 'Β', $str);
	$str = str_replace('&beta;', 'β', $str);
	$str = str_replace('&brvbar;', '¦', $str);
	$str = str_replace('&bull;', '•', $str);
	$str = str_replace('&cap;', '∩', $str);
	$str = str_replace('&Ccedil;', 'Ç', $str);
	$str = str_replace('&ccedil;', 'ç', $str);
	$str = str_replace('&cedil;', '¸', $str);
	$str = str_replace('&cent;', '¢', $str);
	$str = str_replace('&Chi;', 'Χ', $str);
	$str = str_replace('&chi;', 'χ', $str);
	$str = str_replace('&circ;', 'ˆ', $str);
	$str = str_replace('&clubs;', '♣', $str);
	$str = str_replace('&cong;', '≅', $str);
	$str = str_replace('&copy;', '©', $str);
	$str = str_replace('&crarr;', '↵', $str);
	$str = str_replace('&cup;', '∪', $str);
	$str = str_replace('&curren;', '¤', $str);
	$str = str_replace('&dagger;', '†', $str);
	$str = str_replace('&Dagger;', '‡', $str);
	$str = str_replace('&darr;', '↓', $str);
	$str = str_replace('&dArr;', '⇓', $str);
	$str = str_replace('&deg;', '°', $str);
	$str = str_replace('&Delta;', 'Δ', $str);
	$str = str_replace('&delta;', 'δ', $str);
	$str = str_replace('&diams;', '♦', $str);
	$str = str_replace('&divide;', '÷', $str);
	$str = str_replace('&Eacute;', 'É', $str);
	$str = str_replace('&eacute;', 'é', $str);
	$str = str_replace('&Ecirc;', 'Ê', $str);
	$str = str_replace('&ecirc;', 'ê', $str);
	$str = str_replace('&Egrave;', 'È', $str);
	$str = str_replace('&egrave;', 'è', $str);
	$str = str_replace('&empty;', '∅', $str);
	$str = str_replace('&emsp;', ' ', $str);
	$str = str_replace('&ensp;', ' ', $str);
	$str = str_replace('&Epsilon;', 'Ε', $str);
	$str = str_replace('&epsilon;', 'ε', $str);
	$str = str_replace('&equiv;', '≡', $str);
	$str = str_replace('&Eta;', 'Η', $str);
	$str = str_replace('&eta;', 'η', $str);
	$str = str_replace('&ETH;', 'Ð', $str);
	$str = str_replace('&eth;', 'ð', $str);
	$str = str_replace('&Euml;', 'Ë', $str);
	$str = str_replace('&euml;', 'ë', $str);
	$str = str_replace('&euro;', '€', $str);
	$str = str_replace('&exist;', '∃', $str);
	$str = str_replace('&fnof;', 'ƒ', $str);
	$str = str_replace('&forall;', '∀', $str);
	$str = str_replace('&frac12;', '½', $str);
	$str = str_replace('&frac14;', '¼', $str);
	$str = str_replace('&frac34;', '¾', $str);
	$str = str_replace('&frasl;', '⁄', $str);
	$str = str_replace('&Gamma;', 'Γ', $str);
	$str = str_replace('&gamma;', 'γ', $str);
	$str = str_replace('&ge;', '≥', $str);
	$str = str_replace('&harr;', '↔', $str);
	$str = str_replace('&hArr;', '⇔', $str);
	$str = str_replace('&hearts;', '♥', $str);
	$str = str_replace('&hellip;', '…', $str);
	$str = str_replace('&Iacute;', 'Í', $str);
	$str = str_replace('&iacute;', 'í', $str);
	$str = str_replace('&Icirc;', 'Î', $str);
	$str = str_replace('&icirc;', 'î', $str);
	$str = str_replace('&iexcl;', '¡', $str);
	$str = str_replace('&Igrave;', 'Ì', $str);
	$str = str_replace('&igrave;', 'ì', $str);
	$str = str_replace('&image;', 'ℑ', $str);
	$str = str_replace('&infin;', '∞', $str);
	$str = str_replace('&int;', '∫', $str);
	$str = str_replace('&Iota;', 'Ι', $str);
	$str = str_replace('&iota;', 'ι', $str);
	$str = str_replace('&iquest;', '¿', $str);
	$str = str_replace('&isin;', '∈', $str);
	$str = str_replace('&Iuml;', 'Ï', $str);
	$str = str_replace('&iuml;', 'ï', $str);
	$str = str_replace('&Kappa;', 'Κ', $str);
	$str = str_replace('&kappa;', 'κ', $str);
	$str = str_replace('&Lambda;', 'Λ', $str);
	$str = str_replace('&lambda;', 'λ', $str);
	$str = str_replace('&lang;', '〈', $str);
	$str = str_replace('&laquo;', '«', $str);
	$str = str_replace('&larr;', '←', $str);
	$str = str_replace('&lArr;', '⇐', $str);
	$str = str_replace('&lceil;', '⌈', $str);
	$str = str_replace('&ldquo;', '“', $str);
	$str = str_replace('&le;', '≤', $str);
	$str = str_replace('&lfloor;', '⌊', $str);
	$str = str_replace('&lowast;', '∗', $str);
	$str = str_replace('&loz;', '◊', $str);
	$str = str_replace('&lrm;', '‎', $str);
	$str = str_replace('&lsaquo;', '‹', $str);
	$str = str_replace('&lsquo;', '‘', $str);
	$str = str_replace('&macr;', '¯', $str);
	$str = str_replace('&mdash;', '—', $str);
	$str = str_replace('&micro;', 'µ', $str);
	$str = str_replace('&middot;', '·', $str);
	$str = str_replace('&minus;', '−', $str);
	$str = str_replace('&Mu;', 'Μ', $str);
	$str = str_replace('&mu;', 'μ', $str);
	$str = str_replace('&nabla;', '∇', $str);
	$str = str_replace('&nbsp;', ' ', $str);
	$str = str_replace('&ndash;', '–', $str);
	$str = str_replace('&ne;', '≠', $str);
	$str = str_replace('&ni;', '∋', $str);
	$str = str_replace('&not;', '¬', $str);
	$str = str_replace('&notin;', '∉', $str);
	$str = str_replace('&nsub;', '⊄', $str);
	$str = str_replace('&Ntilde;', 'Ñ', $str);
	$str = str_replace('&ntilde;', 'ñ', $str);
	$str = str_replace('&Nu;', 'Ν', $str);
	$str = str_replace('&nu;', 'ν', $str);
	$str = str_replace('&Oacute;', 'Ó', $str);
	$str = str_replace('&oacute;', 'ó', $str);
	$str = str_replace('&Ocirc;', 'Ô', $str);
	$str = str_replace('&ocirc;', 'ô', $str);
	$str = str_replace('&OElig;', 'Œ', $str);
	$str = str_replace('&oelig;', 'œ', $str);
	$str = str_replace('&Ograve;', 'Ò', $str);
	$str = str_replace('&ograve;', 'ò', $str);
	$str = str_replace('&oline;', '‾', $str);
	$str = str_replace('&Omega;', 'Ω', $str);
	$str = str_replace('&omega;', 'ω', $str);
	$str = str_replace('&Omicron;', 'Ο', $str);
	$str = str_replace('&omicron;', 'ο', $str);
	$str = str_replace('&oplus;', '⊕', $str);
	$str = str_replace('&or;', '∨', $str);
	$str = str_replace('&ordf;', 'ª', $str);
	$str = str_replace('&ordm;', 'º', $str);
	$str = str_replace('&Oslash;', 'Ø', $str);
	$str = str_replace('&oslash;', 'ø', $str);
	$str = str_replace('&Otilde;', 'Õ', $str);
	$str = str_replace('&otilde;', 'õ', $str);
	$str = str_replace('&otimes;', '⊗', $str);
	$str = str_replace('&Ouml;', 'Ö', $str);
	$str = str_replace('&ouml;', 'ö', $str);
	$str = str_replace('&para;', '¶', $str);
	$str = str_replace('&part;', '∂', $str);
	$str = str_replace('&permil;', '‰', $str);
	$str = str_replace('&perp;', '⊥', $str);
	$str = str_replace('&Phi;', 'Φ', $str);
	$str = str_replace('&phi;', 'φ', $str);
	$str = str_replace('&Pi;', 'Π', $str);
	$str = str_replace('&pi;', 'π', $str);
	$str = str_replace('&piv;', 'ϖ', $str);
	$str = str_replace('&plusmn;', '±', $str);
	$str = str_replace('&pound;', '£', $str);
	$str = str_replace('&prime;', '′', $str);
	$str = str_replace('&Prime;', '″', $str);
	$str = str_replace('&prod;', '∏', $str);
	$str = str_replace('&prop;', '∝', $str);
	$str = str_replace('&Psi;', 'Ψ', $str);
	$str = str_replace('&psi;', 'ψ', $str);
	$str = str_replace('&radic;', '√', $str);
	$str = str_replace('&rang;', '〉', $str);
	$str = str_replace('&raquo;', '»', $str);
	$str = str_replace('&rarr;', '→', $str);
	$str = str_replace('&rArr;', '⇒', $str);
	$str = str_replace('&rceil;', '⌉', $str);
	$str = str_replace('&rdquo;', '”', $str);
	$str = str_replace('&real;', 'ℜ', $str);
	$str = str_replace('&reg;', '®', $str);
	$str = str_replace('&rfloor;', '⌋', $str);
	$str = str_replace('&Rho;', 'Ρ', $str);
	$str = str_replace('&rho;', 'ρ', $str);
	$str = str_replace('&rlm;', '‏', $str);
	$str = str_replace('&rsaquo;', '›', $str);
	$str = str_replace('&rsquo;', '’', $str);
	$str = str_replace('&sbquo;', '‚', $str);
	$str = str_replace('&Scaron;', 'Š', $str);
	$str = str_replace('&scaron;', 'š', $str);
	$str = str_replace('&sdot;', '⋅', $str);
	$str = str_replace('&sect;', '§', $str);
	$str = str_replace('&shy;', '­', $str);
	$str = str_replace('&Sigma;', 'Σ', $str);
	$str = str_replace('&sigma;', 'σ', $str);
	$str = str_replace('&sigmaf;', 'ς', $str);
	$str = str_replace('&sim;', '∼', $str);
	$str = str_replace('&spades;', '♠', $str);
	$str = str_replace('&sub;', '⊂', $str);
	$str = str_replace('&sube;', '⊆', $str);
	$str = str_replace('&sum;', '∑', $str);
	$str = str_replace('&sup1;', '¹', $str);
	$str = str_replace('&sup2;', '²', $str);
	$str = str_replace('&sup3;', '³', $str);
	$str = str_replace('&sup;', '⊃', $str);
	$str = str_replace('&supe;', '⊇', $str);
	$str = str_replace('&szlig;', 'ß', $str);
	$str = str_replace('&Tau;', 'Τ', $str);
	$str = str_replace('&tau;', 'τ', $str);
	$str = str_replace('&there4;', '∴', $str);
	$str = str_replace('&Theta;', 'Θ', $str);
	$str = str_replace('&theta;', 'θ', $str);
	$str = str_replace('&thetasym;', 'ϑ', $str);
	$str = str_replace('&thinsp;', ' ', $str);
	$str = str_replace('&THORN;', 'Þ', $str);
	$str = str_replace('&thorn;', 'þ', $str);
	$str = str_replace('&tilde;', '˜', $str);
	$str = str_replace('&times;', '×', $str);
	$str = str_replace('&trade;', '™', $str);
	$str = str_replace('&Uacute;', 'Ú', $str);
	$str = str_replace('&uacute;', 'ú', $str);
	$str = str_replace('&uarr;', '↑', $str);
	$str = str_replace('&uArr;', '⇑', $str);
	$str = str_replace('&Ucirc;', 'Û', $str);
	$str = str_replace('&ucirc;', 'û', $str);
	$str = str_replace('&Ugrave;', 'Ù', $str);
	$str = str_replace('&ugrave;', 'ù', $str);
	$str = str_replace('&uml;', '¨', $str);
	$str = str_replace('&upsih;', 'ϒ', $str);
	$str = str_replace('&Upsilon;', 'Υ', $str);
	$str = str_replace('&upsilon;', 'υ', $str);
	$str = str_replace('&Uuml;', 'Ü', $str);
	$str = str_replace('&uuml;', 'ü', $str);
	$str = str_replace('&weierp;', '℘', $str);
	$str = str_replace('&Xi;', 'Ξ', $str);
	$str = str_replace('&xi;', 'ξ', $str);
	$str = str_replace('&Yacute;', 'Ý', $str);
	$str = str_replace('&yacute;', 'ý', $str);
	$str = str_replace('&yen;', '¥', $str);
	$str = str_replace('&yuml;', 'ÿ', $str);
	$str = str_replace('&Yuml;', 'Ÿ', $str);
	$str = str_replace('&Zeta;', 'Ζ', $str);
	$str = str_replace('&zeta;', 'ζ', $str);
	$str = str_replace('&zwj;', '‍', $str);
	$str = str_replace('&zwnj;', '‌', $str);
	$str = str_replace('&gt;', '>', $str);
	$str = str_replace('&lt;', '<', $str);
	$str = str_replace('&quot;', '"', $str);
	return trim($str);
}


