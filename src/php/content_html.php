<h2>Kurze Einleitung</h2>
<p class="start_text">HTML ist die Sprache welche <u>beschreibt</u>, welche Elemente mit welchem Inhalt sich auf der Website befinden.<br>
Mit dieser Sprache ist es möglich die Website zu strukturieren (Text, Links, Formulare, Bilder, ... einfügen), sowie Text grob zu formatieren.<br>
Style erhält die Website mit CSS und Funktion erhält die Website durch JavaScript.</p>
<p class="start_text">Im folgenden werde ich den Aufbau einer simplen Website erklären. Anschliesend werde ich ihr etwas Style(CSS) und Funktion(JavaScript) geben.
Ich empfehle die Kategorien chronologisch durchzugehen.</p>

<h2>Der Grundaufbau</h2>

<p class="start_text">Eine jede Website hat folgenden Grundaufbau:</p>

<div class="code" t="html">

  <p>&lt;!doctype html&gt;<br /><br />&lt;html lang="de"&gt;<br /><br />&nbsp; &lt;head&gt;<br />&nbsp;&nbsp;&nbsp; &lt;meta charset="utf-8"/&gt;<br />&nbsp;&nbsp;&nbsp; &lt;title&gt;Lorem ipsum&lt;/title&gt;<br />&nbsp; &lt;/head&gt;<br />&nbsp; &lt;body&gt;<br /><br /><br />&nbsp; &lt;/body&gt;<br />&lt;/html&gt;<br /><br /></p>

</div>

<a href="bsp/bsp1.html" target="_blank">Anschauen</a>

<h3>Erklärung</h3>

<p class="start_text">Der Grundaufbau des Websitecodes besteht aus 2 Teilen: dem <b>Head</b> und dem <b>Body</b>.
  Der Head ist der Bereich zwichen<i>&nbsp; &lt;head&gt;</i> und&nbsp;&lt;/head&gt;.
  In ihm werden dem Browser alle Informationen gegeben die er braucht/will.
  Um es simpel zu halten reicht es den Titel der Website in dem "title" Bereich einzutragen.<br>
  Der Body hingegen ist der Bereich zwichen<i>&nbsp; &lt;body&gt;</i> und&nbsp;&lt;/body&gt;.
  Er ist der Bereich welcher am Ende beim aufrufen der Website angezeigt wird. Fast jedes Element &lt;x&gt; in HTML muss mit einem &lt;/x&gt; abgeschlossen werden,
  sollte dies einmal nicht der Fall sein werde ich darauf hinweisen.
</p>

<h2>Einfacher Text</h2>

<h3>Überschriften</h3>

<p class="start_text">Überschriften sind sehr wichtig um die Website anschaulich zu gestalten, sie strukturieren den Text. <br>
  Insgesammt gibt es 6 "Arten" von Überschriften: &lt;h1&gt;, &lt;h2&gt;, &lt;h3&gt;, &lt;h4&gt;, &lt;h5&gt; und &lt;h6&gt;. <br>
  Je größer die Zahl nach dem h ist desto kleiner ist die Überschrift. &lt;h1&gt; ist die Hauptüberschrift. Sie sollte immer nur einmal auf der Website zu finden sein.</p>
<p class="start_text">Anmerkung: Jedes Dokument deiner Website braucht die .html Endung um von deinem Browser erkannt zu werden.
  Deine Haupseite sollte immer 'index.html' heisen.</p>
<p class="start_text">So sieht es aus wenn alle Überschriften nebeneinander stehen:</p>

<div class="code" t="html">
  <p>&lt;!doctype html&gt;<br /><br />&lt;html lang="de"&gt;<br />&nbsp; &lt;head&gt;<br />&nbsp;&nbsp;&nbsp; &lt;meta charset="utf-8"/&gt;<br />&nbsp;&nbsp;&nbsp; &lt;title&gt;Lorem ipsum&lt;/title&gt;<br />&nbsp; &lt;/head&gt;<br />&nbsp; &lt;body&gt;<br /><br />&nbsp;&nbsp;&nbsp; &lt;h1&gt;Überschrift 1&lt;/h1&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h2&gt;Überschrift 2&lt;/h2&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h3&gt;Überschrift 3&lt;/h3&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h4&gt;Überschrift 4&lt;/h4&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h5&gt;Überschrift 5&lt;/h5&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h6&gt;Überschrift 6&lt;/h6&gt;<br /><br />&nbsp; &lt;/body&gt;<br />&lt;/html&gt;<br /><br /></p>
</div>

<a href="bsp/bsp2.html" target="_blank">Anschauen</a>

<h3>Absätze</h3>
<p class="start_text">Absätze werden mit &lt;p&gt; markiert. Sie werden benutzt um Teilthemen von einander abzugrenzen. Möchte mann einfach nur einen Zeilenumbruch
  kann man &lt;br&gt; verwenden. &lt;br&gt; ist einer dieser Sonderfälle welche kein Endelement brauchen.</p>

<p class="start_text">So sieht Text aus der mit Absätzen formatiert wurde:</p>
<div class="code" t="html">
  <p>&lt;!doctype html&gt;<br /><br />&lt;html lang="de"&gt;<br />&nbsp; &lt;head&gt;<br />&nbsp;&nbsp;&nbsp; &lt;meta charset="utf-8" /&gt;<br />&nbsp;&nbsp;&nbsp; &lt;title&gt;Lorem ipsum&lt;/title&gt;<br />&nbsp; &lt;/head&gt;<br />&nbsp; &lt;body&gt;<br /><br />&nbsp;&nbsp;&nbsp; &lt;h1&gt;Überschrift 1&lt;/h1&gt;<br /><br />&nbsp;&nbsp;&nbsp; &lt;p&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.&lt;br&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. &lt;br&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. &lt;br&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; At vero eos et accusam et justo duo dolores et ea rebum. &lt;br&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br />&nbsp;&nbsp;&nbsp; &lt;/p&gt;<br />&nbsp;&nbsp;&nbsp; &lt;p&gt;<br />&nbsp;&nbsp;&nbsp; Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.<br />&nbsp;&nbsp;&nbsp; &lt;/p&gt;<br />&nbsp; &lt;/body&gt;<br />&lt;/html&gt;<br /><br /></p>
</div>

<a href="bsp/bsp3.html" target="_blank">Anschauen</a>

<h3>Textgestaltung</h3>

<p class="start_text">Es ist möglich mit HTML den Text innerhalb eines Absatzes oder Überschrift zu gestalten.
  Auch wenn die meiste Gestaltung erst mit CSS möglich ist gibt es die Möglichkeit Text mit &lt;b&gt; <b>Fett</b>, mit &lt;i&gt; <i>Schräg</i> und mit &lt;u&gt; <u>Unterstrichen</u> darzustellen.</p>

<p class="start_text">So sehen die Formatierungen angewand aus:</p>

<div class="code" t="html">
  <p>&lt;!doctype html&gt;<br /><br />&lt;html lang="de"&gt;<br />&nbsp; &lt;head&gt;<br />&nbsp;&nbsp;&nbsp; &lt;meta charset="utf-8"/&gt;<br />&nbsp;&nbsp;&nbsp; &lt;title&gt;Lorem ipsum&lt;/title&gt;<br />&nbsp; &lt;/head&gt;<br />&nbsp; &lt;body&gt;<br /><br /><br />&nbsp;&nbsp;&nbsp; &lt;h2&gt;Ich bin eine normale &Uuml;berschrift&lt;/h2&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h2&gt;&lt;b&gt;Ich bin eine fette &Uuml;berschrift&lt;/b&gt;&lt;/h2&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h2&gt;&lt;i&gt;Ich bin eine schr&auml;ge &Uuml;berschrift&lt;/i&gt;&lt;/h2&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h2&gt;&lt;u&gt;Ich bin eine unterstrichene &Uuml;berschrift&lt;/u&gt;&lt;/h2&gt;<br /><br />&nbsp;&nbsp;&nbsp; &lt;p&gt;Ich bin normal, &lt;b&gt;ich bin fett&lt;/b&gt;, &lt;i&gt;ich bin schr&auml;g&lt;/i&gt;, &lt;u&gt;ich bin unterstrichen&lt;/u&gt; und &lt;u&gt;&lt;b&gt;&lt;i&gt;ich bin alles&lt;/u&gt;&lt;/b&gt;&lt;/i&gt;&lt;/p&gt;<br /><br /><br />&nbsp; &lt;/body&gt;<br />&lt;/html&gt;<br /><br /><br /><br /></p>
</div>

<a href="bsp/bsp4.html" target="_blank">Anschauen</a>

<h2>Bilder</h2>

<p class="start_text">Bilder können das Gesammtbild einer Website auflockern. Eingefügt werden können sie mit &lt;img src="" alt=""&gt;. In die Anfürungszeichen bei src kommt der Weg zu deinem Bild (z.B.: img/bild.png). In alt kommt eine kurze Beschreibung des Bildes welche angezeigt wird, wenn das laden des Bildes fehlschlägt.
  &lt;img src="" alt=""&gt; braucht kein Endelement. Es ist möglich die Höhe und Weite des Bildes mit den Parametern "height" und "width" festzulegen, wie diese verwendet werden ist im Beispiel zu sehen.</p>

<p class="start_text">So verwendet man Bilder in HTML:</p>

<div class="code" t="html">

  <p>&lt;!doctype html&gt;<br /><br />&lt;html lang="de"&gt;<br /><br />&nbsp; &lt;head&gt;<br />&nbsp;&nbsp;&nbsp; &lt;meta charset="utf-8"/&gt;<br />&nbsp;&nbsp;&nbsp; &lt;title&gt;Lorem ipsum&lt;/title&gt;<br />&nbsp; &lt;/head&gt;<br />&nbsp; &lt;body&gt;<br /><br />&nbsp;&nbsp;&nbsp; &lt;img src="img/bild.jpg" alt="Bild"&gt;<br />&nbsp;&nbsp;&nbsp; &lt;img src="img/bild.jpg" alt="Bild" width="100px" height="300px"&gt;<br /><br />&nbsp; &lt;/body&gt;<br />&lt;/html&gt;<br /><br /></p>

</div>

<a href="bsp/bsp5.html" target="_blank">Anschauen</a>
