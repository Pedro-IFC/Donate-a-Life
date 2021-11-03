<p><span class="tab"></span>Apesar de estarmos sendo massacrados pelo time adversário, foi divertido, jogar sem ter que acertar 100%, mas sem jogar de qualquer forma</p>
<p>-<span class="nome"></span> é melhor que esse seja um bom ataque, é o melhor levantamento que eu posso fazer -Berrou Lev</p>
<p>-Pode deixar, nesse bloqueio eu não perco-Berrei de volta para ele</p>
<p><span class="tab"></span>Abri ainda mais a corrida, tendo um bom espaço para atacar, um bom ataque vem de um bom pulo e um bom pulo começa com uma boa passada. Ao fazer a passada, pulei o máximo que podia e assim usando toda a minha força no bloqueio, ele explodiu com um som tremendo.</p>
<p><span class="tab"></span>-ISSOOOOOOOOOOOOO-Fui berrando, indo na direção do Lev para um high-five, e ele respondeu igualmente</p>
<p>-Já chega agora é hora de trocarem de roupa para voltarem pra sala-Declarou Kana-sensei</p>




<p><span class="tab"></span>Indo para a o vestiario eu e Lev passamos por um grupo de meninas, elas automaticamente viraram a cabeça para o outro lado.</p>
<p><span class="tab"></span>Não liga - disse Lev, as vezes ele sabia exatamente como eu me sentia, parecia que ele lia a minha mente, era assustador em alguns momentos- Você deve achar que eu leio sua mente né?</p>
<p><span class="tab"></span>Como você sabe?- Respondi mais assustado do que antes</p>
<p><span class="tab"></span>Eu sei tudo sobre você- Disse ele rindo- Estou brincando, é fácil de ler seu rosto.</p>
<p><span class="tab"></span>Como assim ler?- Perguntei sem saber o que ele queria dizer</p>
<p><span class="tab"></span>Hummm, simplificando você demonstra seus sentimentos muito facilmente pelo rosto, como se eu fizesse uma careta para cada sentimento, assim fica fácil de saber o que estou pensando não?</p>
<p><span class="tab"></span></p>Realmente, então me diga, isso tem algum relacionamento com você saber para onde vou cortar nos treinos?
<p><span class="tab"></span>Me descobriram, você sempre olha muito diretamente para o lugar que vai cortar- Respondeu ele quase debochando da minha cara</p>
<p><span class="tab"></span>Se é assim, por que não me falou antes? esse não poderia ser o motivo de eu ser bloqueado tão contantemente?</p>
<p><span class="tab"></span>Ehhhhhhhh, deixa quieto- Respondeu ele</p>
<?php 
	if (!isset($_SESSION['escolha2'])){
		echo '<form action="../assets/escolhas/escolhas.php?escolha=2" method="POST">';
		echo '<button type="submit" class="btn btn-primary" value="0" name="btn">Fale</button>';
		echo "&nbsp;&nbsp;";
		echo '<button type="submit" class="btn btn-success" value="1" name="btn">Você queria ser o ace?</button>';
		echo '</form>';
		}else{
			if ($_SESSION['escolha1']==0) {
				include '../assets/escolhas/returns/escolha20.php';
			}else if ($_SESSION['escolha1']==1) {
				include '../assets/escolhas/returns/escolha21.php';
			}
		}
?>