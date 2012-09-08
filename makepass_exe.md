MakePass.EXE
============


<table border="0" width="100%">
<tbody>
<tr>
<td width="84%" valign="top">&nbsp;
<p align="center"><big> <strong> <big>MakePass.EXE v 1.0 </big></strong></big></p>
<p align="center">Written by Dianelos Georgoudis, TecApro International october 97</p>
<p>&nbsp;</p>
<table border="1" width="100%" bgcolor="#0000ff">
<tbody>
<tr>
<td><small> <small> <small> <small> <small> <small> <small> <small> <small> <small> <small> <span style="color: #ffffff; font-size: large;"> <strong> <tt>Introduction</tt></strong></span></small></small></small></small></small></small></small></small></small></small></small></td>
</tr>
</tbody>
</table>
<p><span style="font-family: Courier New; color: #000000; font-size: xx-small;">&nbsp;</span> <strong>MakePass.EXE v 1.0</strong> is a freeware program that generates high quality pass phrases. It is a very small (23 kB) self-sufficient program. You can use it under DOS (recommended) or Windows. You are free to use, copy and distribute this program.  <a href="makepass.exe">Click here to download MakePass.EXE</a>.</p>
<p>MakePass contains a list of short and common English words. Each word is between 3 and 6 characters long. There are 4096 (2^12) different words in the list which means each word you generate provides 12 bits of security (or entropy). If you use MakePass to generate a list of 5 words, and you use them in the order in which they are generated, then you create a pass phrase with 60 bits of security, which is sufficient for most purposes. You can generate longer lists of words for even more security. When we say a pass phrase has N bits of security we mean that an attacker would have to try on average some 2^(N-1) guesses in order to discover the pass phrase. With 60 bits of security the number of guesses required is about 576 quadrillion.</p>
<p>To generate a pass phrase all you have to do is keep on pressing keys on your keyboard until you have generated a word list of the length you need. MakePass measures the latency between keystrokes and uses this random data to select a word at random from its word list.</p>
<p>&nbsp;</p>
<table border="1" width="100%" bgcolor="#0000ff">
<tbody>
<tr>
<td><small> <small> <small> <small> <small> <small> <small> <small> <small> <small> <small> <span style="color: #ffffff; font-size: large;"> <strong> <tt>How to Remember your Pass Phrase</tt></strong></span></small></small></small></small></small></small></small></small></small></small></small></td>
</tr>
</tbody>
</table>
<p><span style="font-family: Courier New; color: #000000; font-size: x-small;">&nbsp;</span> <span style="color: #000000; font-size: x-small;"> <big>It is important not to forget the pass phrase you have generated. It is easier to memorize a pass phrase if you can invent a sentence based on the words in the pass phrase. You can always add a few extra words to help make the pass phrase more memorable (this will actually increase the security of your pass phrase). However, you should not delete any of the original words as this will drastically reduce the security you achieve with the pass phrase. </big></span></p>
<p><span style="color: #000000; font-size: x-small;"> <big>If you need to, you can vary the order of the original words to produce a more memorable pass phrase, however this will also decrease its security. If you plan to vary the word order in the pass phrase you generate it is best to use a longer pass phrase. The following table will help you choose the length of pass phrase to use (over 60 bits of security offers good protection, over 90 bits of security is probably excessive in the sense that the risk of forgetting an even bigger pass phrase becomes too large - if you are very confident about your memory feel free to memorize an even stronger pass phrase):</big></span></p>
<div>
<table style="height: 84px;" border="1" width="70%">
<tbody>
<tr>
<td width="33%" height="26" align="center"><span style="font-family: Courier;"> <small>Number of words</small></span></td>
<td width="33%" height="26" align="center"><span style="font-family: Courier;"> <small>security at original order (bits)</small></span></td>
<td width="33%" height="26" align="center"><span style="font-family: Courier;"> <small>security after choosing a new order (bits)</small></span></td>
</tr>
<tr>
<td width="33%" height="19" align="center">5</td>
<td width="33%" height="19" align="center"><strong>60</strong></td>
<td width="33%" height="19" align="center"><strong>53</strong></td>
</tr>
<tr>
<td width="33%" height="21" align="center">6</td>
<td width="33%" height="21" align="center"><strong>72</strong></td>
<td width="33%" height="21" align="center"><strong>62</strong></td>
</tr>
<tr>
<td width="33%" height="21" align="center">7</td>
<td width="33%" height="21" align="center"><strong>84</strong></td>
<td width="33%" height="21" align="center"><strong>71</strong></td>
</tr>
<tr>
<td width="33%" height="21" align="center">8</td>
<td width="33%" height="21" align="center"><strong>96</strong></td>
<td width="33%" height="21" align="center"><strong>80</strong></td>
</tr>
<tr>
<td width="33%" height="21" align="center">9</td>
<td width="33%" height="21" align="center"><big>108</big></td>
<td width="33%" height="21" align="center"><big>89</big></td>
</tr>
<tr>
<td width="33%" height="21" align="center">10</td>
<td width="33%" height="21" align="center"><big>120</big></td>
<td width="33%" height="21" align="center"><big>98</big></td>
</tr>
<tr>
<td width="33%" height="21" align="center">11</td>
<td width="33%" height="21" align="center"><big>132</big></td>
<td width="33%" height="21" align="center"><big>107</big></td>
</tr>
<tr>
<td width="33%" height="21" align="center">12</td>
<td width="33%" height="21" align="center"><big>144</big></td>
<td width="33%" height="21" align="center"><big>116</big></td>
</tr>
</tbody>
</table>
</div>
<p><span style="color: #000000; font-size: x-small;"> <big>Another approach you can use is to generate several pass phrases and then choose the one that is easiest to memorize. If you produce 4 pass phrases and choose one then you diminish security by 2 bits. If you produce 8 pass phrases and choose one then you diminish security by 3 bits. For example, if you produce 4 pass phrases of 6 words each, rearrange each pass phrase to make it easier to memorize, and then choose one of the four resulting pass phrases, you still end up with 60 bits of security and, at the same time, you have a pass phrase that is much easier to memorize. Adding a few extra words to the chosen pass phrase can make it even easier to memorize, and will at the same time increase security.</big></span></p>
<p><span style="color: #000000; font-size: x-small;"> <big>These ideas are illustrated in the following example which is based upon data generated by MakePass. First I generated four pass phrases: </big></span></p>
<p><span style="font-family: Courier; color: #000000; font-size: xx-small;"> <big>&nbsp;&nbsp;&nbsp;&nbsp; First pass phrase:&nbsp;&nbsp;&nbsp; thief steep niece lucid fitful board</big> <br /> <big>&nbsp;&nbsp;&nbsp;&nbsp; Second pass phrase:&nbsp;&nbsp; exact hassle ace purse ruler quaint</big> <br /> <big>&nbsp;&nbsp;&nbsp;&nbsp; Third pass phrase:&nbsp;&nbsp;&nbsp; envoy sigma buffet movie spicy spot</big> <br /> <big>&nbsp;&nbsp;&nbsp;&nbsp; Fourth pass phrase:&nbsp;&nbsp; Europe creed mile heard number mare</big></span></p>
<p><span style="color: #000000; font-size: x-small;"> <big>The easiest phrase for me to remember is the third one. If I memorize it as it is, then I get 70 bits of security. However, if I rearrange it and then add some extra words I can generate the following sentence:</big></span></p>
<p><span style="font-family: Courier; color: #000000; font-size: xx-small;"> <big>&nbsp;&nbsp;&nbsp;&nbsp; I saw a movie at my favourite spot about an envoy from planet Sigma eating&nbsp;a spicy buffet.</big></span></p>
<p><span style="color: #000000; font-size: x-small;"> <big>I can use this sentence to help me memorize the rearranged 6 words pass phrase:</big></span></p>
<p><span style="font-family: Courier; color: #000000; font-size: xx-small;"> <big>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; movie spot envoy sigma spicy buffet</big></span></p>
<p><span style="color: #000000; font-size: x-small;"> <big>which still has some 60 bits of security. Or, I can use the complete sentence as a pass phrase, which would offer  <strong>even better security</strong> but is rather long if I have to type it frequently.</big></span></p>
<p><span style="color: #000000; font-size: x-small;"> <big>You can also use MakePass to generate random bytes by executing the command:</big></span> <span style="font-family: Courier New; color: #000000; font-size: x-small;"> </span> <span style="font-family: Courier New;"> <strong>MakePass bytes</strong></span></p>
<p>The most important advice for not forgetting your pass phrase is to use it often. One idea is to have your computer ask you to recite your pass phrase(s) each time you turn it on. Never <strong> </strong>write down your pass phrase on a piece of paper, unless you are too worried about your memory - in this case put this piece of paper in a very safe place. Security is about risk - if you think that it is more probable that you will forget the pass phrase than that a thief will break your safe, then your safe is a safer place than your brain.</p>
<p>&nbsp;</p>
<table border="1" width="100%" bgcolor="#0000ff">
<tbody>
<tr>
<td><small> <small> <small> <small> <small> <small> <small> <small> <small> <small> <small> <span style="color: #ffffff; font-size: large;"> <strong> <tt>How to Increase the Entropy of your Pass Phrase</tt></strong></span></small></small></small></small></small></small></small></small></small></small></small></td>
</tr>
</tbody>
</table>
<p><span style="color: #000000; font-size: x-small;"> <big>Here are some ways to increase the entropy: </big></span></p>
<p><span style="color: #000000; font-size: x-small;"> <big>1. Make some spelling error. For example write "movy" instead of "movie".</big></span></p>
<p><span style="color: #000000; font-size: x-small;"> <big>2. Use some upper case characters.&nbsp; </big></span></p>
<p><span style="color: #000000; font-size: x-small;"> <big>3.  <strong>Add</strong>&nbsp; staff such as punctuation symbols, garbage characters or digits, etc. </big></span></p>
<p><span style="color: #000000; font-size: x-small;"> <big>Here is an improved version of the pass phrase produced above:</big></span></p>
<p><big> <span style="color: #000000; font-size: x-small;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span> <span style="font-family: Courier; color: #000000; font-size: x-small;">I saw a movy at my favourite SPOT,,, about an envoy from planet Sigma eating a spicy buffet!!!</span></big></p>
<p><span style="color: #000000; font-size: x-small;"> <big>Beware: Any increase in the entropy of your pass phrase makes it more difficult to remember. Also it is not easy to quantify the amount of total entropy, so always start with a good pass phrase before increasing its entropy. </big></span></p>
<p>&nbsp;</p>
<table border="1" width="100%" bgcolor="#0000ff">
<tbody>
<tr>
<td><small> <small> <small> <small> <small> <small> <small> <small> <small> <small> <small> <span style="color: #ffffff; font-size: large;"> <strong> <tt>Technical Description</tt></strong></span></small></small></small></small></small></small></small></small></small></small></small></td>
</tr>
</tbody>
</table>
<p><span style="font-family: Courier New; color: #000000; font-size: x-small;">&nbsp;</span>Your PC has several internal timers. MakePass uses the channel 2 timer that runs at 1.190 MHz and is normally used for sound generation. MakePass uses it to measure the latency of keystrokes. It measures the latency of two consecutive keystrokes, compares their values and produces 1 bit of random data. The random bits are used to generate a 12 bit random number. The generation of each random number requires at least 24 keystrokes.</p>
<p>This procedure will not produce random numbers if you type using a particular rhythm (for example one fast keystroke followed by a slow keystroke). So, MakePass generates a second independent random value by adding (or by exclusive ORing) the value of every other latency measure. When the twelve bit random number is complete, MakePass exclusive ORs the two values which have been generated, truncates the result to 12 bits and uses the resulting random number as an index to select a word from the word list.</p>
<p>Here is a pseudo code representation of MakePass:</p>
<p><span style="font-family: Courier;"> <small>NUM is a 16 bit integer</small> <br /> <small>RAND, LI1, LI2 are 32 bit integers</small> <br /> <small>initialize hardware clock</small> <br /> <small>NUM &lt;- 0</small> <br /> <small>RAND &lt;- 0</small> <br /> <small>repeat</small> <br /> <small>&nbsp;&nbsp; start timer</small> <br /> <small>&nbsp;&nbsp; wait for keystroke</small> <br /> <small>&nbsp;&nbsp; stop timer and put result in LI1</small> <br /> <small>&nbsp;&nbsp; start timer</small> <br /> <small>&nbsp;&nbsp; wait for keystroke</small> <br /> <small>&nbsp;&nbsp; stop timer and put result in LI2</small> <br /> <small>&nbsp;&nbsp; (* check for good values of LI1 and LI2 *)</small> <br /> <small>&nbsp;&nbsp; if LI1&gt;50000 and LI2&gt;50000 and | LI1-LI2 | &gt;500 then</small> <br /> <small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if LI1&gt;LI2 then add bit 1 to NUM else add bit 0 to NUM</small> <br /> <small>&nbsp;&nbsp; if LI1 is odd then exclusive-OR LI2 into RAND</small> <br /> <small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; else add LI2 into RAND</small> <br /> <small>until 12 bits added to NUM</small> <br /> <small>exclusive-OR RAND into NUM</small> <br /> <small>cut NUM down to 12 bits (* now NUM has a random value between 0 y 4095 *)</small> <br /> <small>use NUM as an index to the wordlist (* with 4096 English words *)</small> <br /> <small>display word</small></span> <span style="font-family: Courier New;"> <br /> </span></p>
<p><big> <span style="color: #000000; font-size: x-small;">The 4096 words in the word list were chosen according to the following criteria:</span> <br /> </big>&nbsp;&nbsp; - each word must contain between 3 and 6 characters <big> <br /> </big>&nbsp;&nbsp; - each word must be a common English word <big> <br /> </big>&nbsp;&nbsp; - each word should be clearly different from each other word, orthographically or semantically</p>
<p>The MakePass word list has been placed in the public domain.  <a href="makepass.lst">To download a copy click here</a>. You can use the MakePass word list for many other purposes. For example, you could write a program to capture pass phrases as they are typed and check that each of the words they contain is from the MakePass list. In this way you will be able to catch most typing errors without disclosing any information about the pass phrase itself.</p>
<p>&nbsp;</p>
<p><big> <strong>Integrity of the Program</strong></big></p>
<p>MakePass checks the integrity of the program before starting to generate a pass phrase. Of course, someone could replace the original program with a doctored version and thus invalidate this integrity check. If you have any doubt about the integrity of the program you are using then download a new copy from TecApro's web site - http://www.tecapro.com - and as an additional security measure pkzip it. This should produce a zipped file with a CRC-32 of: 91424236.</p>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td width="84%" valign="top"></td>
</tr>
</tbody>
</table>
<p align="right"><span style="font-size: x-small;"> <em> <br /> <br /> This page was last updated on December 28, 1998.</em> ( <a href="mailto:webmaster@tecapro.com">webmaster@tecapro.com</a>)</span></p>


