#REGEX:

^(\d{0,2}\r\n)?(.*?)\r\nEdit Duplicate Move Delete\r\n(.*?)\r\n(.*?)$

\U\4\E: \2


\[['"]?(.*?)['"]?\]

['$1']


'".$row['Author']."'"


----

<script>!function(r,u,m,b,l,e){r._Rumble=b,r[b]||(r[b]=function(){(r[b]._=r[b]._||[]).push(arguments);if(r[b]._.length==1){l=u.createElement(m),e=u.getElementsByTagName(m)[0],l.async=1,l.src="https://rumble.com/embedJS/u6b71p"+(arguments[1].video?'.'+arguments[1].video:'')+"/?url="+encodeURIComponent(location.href)+"&args="+encodeURIComponent(JSON.stringify([].slice.apply(arguments))),e.parentNode.insertBefore(l,e)}})}(window, document, "script", "Rumble");</script>

<div id="rumble_vnkchc"></div>
<script>
Rumble("play", {"video":"vnkchc","div":"rumble_vnkchc"});</script>


<br/>
<br/>
<div>
Join us this FRIDAY as Steve Shultz interviews Johnny Enlow — LIVE RIGHT HERE — on Dec. 3, at 11 AM Pacific Time. Johnny will be discussing fresh, prophetic intel, including how to navigate through the fog of war we are in, and more! Please join us this Friday with Johnny Enlow!

Elijah List Ministries / ElijahStreams TV, 525 2nd Ave SW, Suite 629 Albany, OR 97321 USA
Thank you for making the always-free Elijah List Ministries possible! Click here to learn how to partner with us: https://secure.qgiv.com/for/eslsl/

Prefer to donate by mail? Make your check or money order (US Dollars) payable to "ELIJAH LIST MINISTRIES" and mail it to:
Elijah List Ministries / Elijah Streams TV
525 2nd Ave SW
Suite 629
Albany, OR 97321 USA</div>


---


(DSCN\d{4})_(.*)

(DS.{2}\d{4})_(.*)




ehdph_\1_\2



---


(.{4})\.(.{2})\.(.{2})_(.*)

ehdph_\1\2\3_\4


eh_(\d{2})(\d{2})(\d{2})_(.*)

ehdph_20\3\1\2_@@@_\4


(\d{8})(\d{6})_\[\d{6}\]



^(\d{4})-(\d{2})-(\d{2})_(\d{2})-(\d{2})-(\d{2})_(.*)_(.*)$
ehdph_\1\2\3_\8_\4\5\6



---



- Renaming some videos
- **#REGEX**

~~~
^(\d{2})(\d{2})(\d{2})(.*)$
EHDVR_20\3\1\2_@@@_\4



---



Here is a **#REGEX** for VoidTools Everything I built that filters only the automatically created "extra" sizes in WordPress **uploads** folder. By deleting all these files, space will be saved! :) **#CSITE** **#EHW** **#SOLVED**:

~~~perl6
regex:^eh.*-\d{1,5}x\d{1,5}
~~~


---



Deleted some duplicate image files from WordPress uploads directory:

~~~javascript
!.lnk  G:\[EHD]\EHD_WEBSITES\EHDSITES_Pers\_EHepperle\EHDSITE_20210405_50Webs_EHW\up_2018c\07     regex:^eh.*-\d{1,5}x\d{1,5}
~~~



---




ehd pic: !regex:\d{3}x\d{3}



---


## WP ALL IMPORT


^.*"(https://www.youtube.com/embed/[a-zA-Z0-9]{8,16}\?rel=\d{1,3})".*$

^.*"(https://www.youtube.com/embed/[a-zA-Z0-9]{8,16})".*$

^.*"(https://www.youtube.com/embed/[a-zA-Z0-9-]{8,16})".*$

^.* src="(https://www.youtube.com/embed/\w{8,16}/\?rel=\d{,3})".*$

^.* src="(https://www.youtube.com/embed/\w{4,16})" .*$

^.* src="(https://www.youtube.com/embed/\w*\?rel=0)" .*$

^.* src="(https://www.youtube.com/embed/[\w-]*)" .*$

^.* src="(https://www.youtube.com/embed/[\w-]*\?rel=0)" .*$

^.* src="(https://www.youtube.com/embed/[\w-]*\?rel=0&[\w-=])" .*$

^.* href="(https://www.youtube.com/watch\?v=[\w]{6,16}&feature=youtu\.be)" .*$

^.* href="(https://youtu\.be[\w]{6,16})".*$

^.* src="(//www.youtube.com/embed/[\w=&-\?]{6,26})" frameborder.*$

^.* src="(https://www.youtube.com/embed/[\w=-\?&;]*)" .*$


@@YT $1



---

^.* href="(https://www.facebook.com/.*/videos/[a-zA-Z0-9]{8,20}/)".*$

^.* href="(https://www.facebook.com/.*\d)".*$




@@FB $1



---

^.*"(https://rumble.com/embed/\w{4,10}/\?pub=\w{4,10})" .*$


@@RB $1


---


^.* href="(https://youtu\.be[\w]{6,16})".*$


---

^.* src="(https://player.vimeo.com/.{6,24})" width .*$

^.* src="(https://player.vimeo.com/video/\w{6,24})" width .*$

^.* src="(https://player.vimeo.com/video/\w{6,24})" width.*$


^.* src="(https://player.vimeo.com/video/[\w=&-\?]{6,90})" width.*$

@@VIMEO $1




---


// Find all lines with any chars (except underscore?) but ignore blank lines and add a dash in front of each non-blank line

FIND: (.*)\S
REPLACE WITH: - \1


---

## REMOVE DONATE BLURB:


#GOTCHA: Realized the donate blurb needed to stripped from the "blurb" field, but it was difficult getting a working regex.

#SOLVED: This is the regex that worked:

Find what:

Elijah List Ministries \/ ElijahStreams TV, 525 2nd Ave SW, Suite 629 Albany, OR 97321 USA Thank you for making the always-free Elijah List Ministries possible\! Click here to learn how to partner with us: https:\/\/elijahstreams.com\/donate Prefer to donate by mail\?\n\nMake your check or money order \(US Dollars\) payable to ""ELIJAH LIST MINISTRIES"" and mail it to: Elijah List Ministries \/ Elijah Streams TV 525 2nd Ave SW Suite 629 Albany, OR 97321 USA"

NOTICE all the escaping that was necessary.

Here is the REGEX I will use in NPP next time to escape all punctuation chars in string:

Find what:

(\(|\)|\[|\]|\!|\?|\.|\/)


Replace with:

\\\1

#GOTCHA: Notice, for the replace to work 3 backslashes are needed


---


This is the next verbiage round to remove. I found the easiest way to do this is with the `CTRL + D` multi-select in VSCode instead of NPP:

```
Elijah List Ministries / ElijahStreams TV, 525 2nd Ave SW, Suite 629 Albany, OR 97321 USA
Thank you for making the always-free Elijah List Ministries possible! Click here to learn how to partner with us: https://ElijahStreams.com/Donate

Prefer to donate by mail? Make your check or money order (US Dollars) payable to ""ELIJAH LIST MINISTRIES"" and mail it to:
Elijah List Ministries / Elijah Streams TV
525 2nd Ave SW
Suite 629
Albany, OR 97321 USA"
```


---



FROM: https://www.geeksforgeeks.org/describe-the-procedure-of-extracting-a-query-string-with-regular-expressions/

```js
  // Define the URL and the regular expression pattern
    const url = 'https://example.com?key1=value1&key2=value2';
    const pattern = '[?&]([^=]+)(=([^&#]*))?';
 
    // Create the regular expression object
    const regex = new RegExp(pattern);
 
    // Check if the URL matches the pattern
    if (regex.test(url)) {
       // Extract the query string from the URL
       const queryString = url.match(regex)[0];
 
       // Split the query string into individual key-value pairs
       const keyValuePairs = queryString.split('&');
 
       // Iterate over the key-value pairs
     // store them in an object
       const queryParams = {};
       keyValuePairs.forEach(pair => {
        const [key, value] = pair.split('=');
        queryParams[key] = value;
      });
 
       // Output the query parameters object
      console.log(queryParams);
   }
```


---


#REGEX to standardize formatting of PROD/DEV/STAGING header lines in notes docs:

Find What:    ^\*{12,99} (STAGING|STG|PROD|LAR_DEV|DEV) \**
Replace With: *********** \1 ***********


---


#GOTCHA: Search and replace in VSCODE JS regex is too greedy:

https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_expressions/Quantifiers
```
By default quantifiers like * and + are "greedy", meaning that they try to match as much of the string as possible. The ? character after the quantifier makes the quantifier "non-greedy": meaning that it will stop as soon as it finds a match. For example, given a string like "some <foo> <bar> new </bar> </foo> thing":

/<.*>/ will match "<foo> <bar> new </bar> </foo>"
/<.*?>/ will match "<foo>"
```

#SOLVED: Instead of searching for (.*), searched for (.*?) instead :)

WRAPPED all $row array args in single quotes


---


7:58 AM - BEGAN working on new SIMPLIFIED TEMPLATE for video single post

**Q:** Notepad++: How to prevent replace regex from Uppercasing everything?

https://hatoum.com/blog/2017/12/6/using-regular-expressions-to-change-case
https://www.thewindowsclub.com/how-to-change-text-case-in-notepad

**A:** Use the \E directive to mark where you want to stop uppercasing (\U).

#GOTCHA: \U must be placed before the capture replace value (e.g., \1, \3, etc), not after



---


#REGEX: ^<script>(.*?)"Rumble"\)(.*?)</script>\n+<div.*</div>\n+<script>\n+Rumble(.*?)\);</script>

- LibreOffice Calc














































































