<map version="freeplane 1.2.0">
<!--To view this file, download free mind mapping software Freeplane from http://freeplane.sourceforge.net -->
<node TEXT="Accueil (index.php" ID="ID_1723255651" CREATED="1283093380553" MODIFIED="1490942584002"><hook NAME="MapStyle">

<map_styles>
<stylenode LOCALIZED_TEXT="styles.root_node">
<stylenode LOCALIZED_TEXT="styles.predefined" POSITION="right">
<stylenode LOCALIZED_TEXT="default" MAX_WIDTH="600" COLOR="#000000" STYLE="as_parent">
<font NAME="SansSerif" SIZE="10" BOLD="false" ITALIC="false"/>
</stylenode>
<stylenode LOCALIZED_TEXT="defaultstyle.details"/>
<stylenode LOCALIZED_TEXT="defaultstyle.note"/>
<stylenode LOCALIZED_TEXT="defaultstyle.floating">
<edge STYLE="hide_edge"/>
<cloud COLOR="#f0f0f0" SHAPE="ROUND_RECT"/>
</stylenode>
</stylenode>
<stylenode LOCALIZED_TEXT="styles.user-defined" POSITION="right">
<stylenode LOCALIZED_TEXT="styles.topic" COLOR="#18898b" STYLE="fork">
<font NAME="Liberation Sans" SIZE="10" BOLD="true"/>
</stylenode>
<stylenode LOCALIZED_TEXT="styles.subtopic" COLOR="#cc3300" STYLE="fork">
<font NAME="Liberation Sans" SIZE="10" BOLD="true"/>
</stylenode>
<stylenode LOCALIZED_TEXT="styles.subsubtopic" COLOR="#669900">
<font NAME="Liberation Sans" SIZE="10" BOLD="true"/>
</stylenode>
<stylenode LOCALIZED_TEXT="styles.important">
<icon BUILTIN="yes"/>
</stylenode>
</stylenode>
<stylenode LOCALIZED_TEXT="styles.AutomaticLayout" POSITION="right">
<stylenode LOCALIZED_TEXT="AutomaticLayout.level.root" COLOR="#000000">
<font SIZE="18"/>
</stylenode>
<stylenode LOCALIZED_TEXT="AutomaticLayout.level,1" COLOR="#0033ff">
<font SIZE="16"/>
</stylenode>
<stylenode LOCALIZED_TEXT="AutomaticLayout.level,2" COLOR="#00b439">
<font SIZE="14"/>
</stylenode>
<stylenode LOCALIZED_TEXT="AutomaticLayout.level,3" COLOR="#990000">
<font SIZE="12"/>
</stylenode>
<stylenode LOCALIZED_TEXT="AutomaticLayout.level,4" COLOR="#111111">
<font SIZE="10"/>
</stylenode>
</stylenode>
</stylenode>
</map_styles>
</hook>
<hook NAME="AutomaticEdgeColor" COUNTER="3"/>
<arrowlink SHAPE="CUBIC_CURVE" COLOR="#000000" WIDTH="2" TRANSPARENCY="80" FONT_SIZE="9" FONT_FAMILY="SansSerif" DESTINATION="ID_1978431383" STARTINCLINATION="121;-282;" ENDINCLINATION="18;-672;" STARTARROW="NONE" ENDARROW="DEFAULT"/>
<node TEXT="Accueuil :&#xa;Affichage des derni&#xe8;res ventes&#xa;et des derni&#xe8;res locations." LOCALIZED_STYLE_REF="defaultstyle.floating" POSITION="right" ID="ID_1546149743" CREATED="1490942685177" MODIFIED="1491289940442" HGAP="1306" VSHIFT="-330">
<hook NAME="FreeNode"/>
</node>
<node TEXT="Affichage des ventes :&#xa;Affiche toutes les ventes disponibles.&#xa;Possibilit&#xe9; de cliquer sur un bouton &quot;plus&quot; pour avoir le d&#xe9;tail." LOCALIZED_STYLE_REF="defaultstyle.floating" POSITION="right" ID="ID_687504101" CREATED="1490942794641" MODIFIED="1491289935886" HGAP="1306" VSHIFT="-230">
<hook NAME="FreeNode"/>
</node>
<node TEXT="Affichage des ventes&#xa;(vente.php)" POSITION="right" ID="ID_459624242" CREATED="1490941389737" MODIFIED="1490942122328" HGAP="90" VSHIFT="-170">
<edge COLOR="#ff0000"/>
<arrowlink SHAPE="CUBIC_CURVE" COLOR="#000000" WIDTH="2" TRANSPARENCY="80" FONT_SIZE="9" FONT_FAMILY="SansSerif" DESTINATION="ID_1978431383" STARTINCLINATION="322;-81;" ENDINCLINATION="193;-76;" STARTARROW="NONE" ENDARROW="DEFAULT"/>
<node TEXT="" ID="ID_3603354" CREATED="1490941389931" MODIFIED="1490941575309" HGAP="30">
<node TEXT="" ID="ID_1074396646" CREATED="1490941390065" MODIFIED="1490941390065"/>
</node>
</node>
<node TEXT="Si l&apos;utilisateur entre dans l&apos;url&#xa;&quot;/administration.php&quot; sans passer&#xa;par la connexion, erreur 404 (404.php)" LOCALIZED_STYLE_REF="defaultstyle.floating" POSITION="right" ID="ID_191017145" CREATED="1490942393881" MODIFIED="1490942494084" HGAP="796" VSHIFT="-130">
<hook NAME="FreeNode"/>
</node>
<node TEXT="Affichage des locations :&#xa;Affiche toutes les locations disponibles.&#xa;Possibilit&#xe9; de cliquer sur un bouton &quot;plus&quot; pour avoir le d&#xe9;tail." LOCALIZED_STYLE_REF="defaultstyle.floating" POSITION="right" ID="ID_64991457" CREATED="1491289408229" MODIFIED="1491289920554" HGAP="1306" VSHIFT="-130">
<hook NAME="FreeNode"/>
</node>
<node TEXT="A propos :&#xa;Formulaire de contact qui utilise la fonction mail de php.&#xa;Envoi sur l&apos;adresse mail idologissio@gmail.com" LOCALIZED_STYLE_REF="defaultstyle.floating" POSITION="right" ID="ID_1985949136" CREATED="1491289488868" MODIFIED="1491289803752" HGAP="1306" VSHIFT="-30">
<hook NAME="FreeNode"/>
</node>
<node TEXT="Connexion administration :&#xa;Formulaire de connexion" LOCALIZED_STYLE_REF="defaultstyle.floating" POSITION="right" ID="ID_1398108606" CREATED="1491289816382" MODIFIED="1491289860819" HGAP="1306" VSHIFT="70">
<hook NAME="FreeNode"/>
</node>
<node TEXT="Affichage des locations&#xa;(locations.php)" POSITION="left" ID="ID_417530450" CREATED="1490941453938" MODIFIED="1490941611328" HGAP="-340" VSHIFT="-20">
<edge COLOR="#0000ff"/>
<node TEXT="Connexion administration&#xa;(connexion.php)" ID="ID_1978431383" CREATED="1490941678117" MODIFIED="1490941947846" HGAP="-440">
<node TEXT="Connexion r&#xe9;ussie :&#xa;administration (administration.php)" ID="ID_1979084459" CREATED="1490942154207" MODIFIED="1490942216764" HGAP="-500" VSHIFT="-140"/>
<node TEXT="Connexion &#xe9;chou&#xe9;e :&#xa;Affichage d&apos;un message d&apos;erreur&#xa;en ajax/javascript (connexion.php)" ID="ID_109901026" CREATED="1490942239359" MODIFIED="1490942370634" HGAP="-490" VSHIFT="140"/>
</node>
</node>
<node TEXT="A propos : formulaire de contact&#xa;(apropos.php)" POSITION="right" ID="ID_153869829" CREATED="1490941585321" MODIFIED="1490942364877" HGAP="70" VSHIFT="120">
<edge COLOR="#00ff00"/>
<arrowlink SHAPE="CUBIC_CURVE" COLOR="#000000" WIDTH="2" TRANSPARENCY="80" FONT_SIZE="9" FONT_FAMILY="SansSerif" DESTINATION="ID_1978431383" STARTINCLINATION="191;180;" ENDINCLINATION="165;92;" STARTARROW="NONE" ENDARROW="DEFAULT"/>
</node>
<node TEXT="Administration :&#xa;Panel d&apos;administration" LOCALIZED_STYLE_REF="defaultstyle.floating" POSITION="right" ID="ID_1574944347" CREATED="1491289854237" MODIFIED="1491289908811" HGAP="1306" VSHIFT="150">
<hook NAME="FreeNode"/>
</node>
</node>
</map>
