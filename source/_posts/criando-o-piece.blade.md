---
extends: _layouts.post
title: Criando o Piece
date: 2017-04-26
section: content
tags: [piece, php, jigsaw]
---

No meu [primeiro post]({{ $page->site->baseurl }}/blog/2017/04/hello-world/) me comprometi em explicar o que fiz pra criar esse blog.

### Do Início

Essa é minha terceira GH Pages. Tive alguns problemas nas outras e fui apagando.

A primeira eu criei com o [Jekyll](https://jekyllrb.com/), e utilizei o [Poole](http://getpoole.com/) como template.

Ele é muito bom, prático e tal, mas tem um probleminha: *ele é em Ruby*. Quem usa Windows sabe que Ruby no Windows não é Ruby, é algo similar que não é a mesma coisa, e eu não tinha a malícia do Vagrant ainda naquela época. Desisti. Era muito chato ter que fazer um monte de gambiarra pra poder utiliar o Jekyll.

A segunda vez foi uma nova tentativa com o Jekyll, e o [Lanyon](http://lanyon.getpoole.com/), que é um template em cima do Poole.

Dessa vez eu já trabalhava com vagrant e subi um Ubuntu pra poder usar o Ruby sem medo. Comecei alguma coisa, mas acabei desanimando. Acontece. Acho que perdi mais tempo brincando com o Jekyll do que criando o blog. O importante é que fluiu legal e eu aprendi a gostar do template do Lanyon.

Quando fui começar essa terceira tentativa eu procurei algo em PHP. É a minha linguagem nativa, sou fluente nela, então porque utilizar outra?

Sondei um pouco o [Sculpin](https://sculpin.io/), mas achei ele muito complexo, com coisas de mais. Realmente ele é muito bom, mas eu queria algo mais simples, algo como o [Jigsaw](http://jigsaw.tighten.co/).

### Jigsaw

O Jigsaw é, como eles dizem, ["um Gerador de Sites Estáticos para Desenvolvedores de Laravel"](https://blog.tighten.co/introducing-jigsaw-a-static-site-generator-for-laravel-developers "a Static Site Generator for Laravel Developers"), e isso pra mim é muito bom. É muito mais conveniente eu utilziar algo que já estou acostumado do que ter que reaprender Symfony pra usar o Sculpin.
Sem falar que eu já estou familiarizado com o Blade, não preciso utilizar Twig.

O problema (~~ou não~~) é que o Jigsaw está apenas começando, a versão 1.0 saiu há [12 dias](https://github.com/tightenco/jigsaw/tree/v1.0.0 "14/04/2017"). Pouca gente conhece, e menos ainda usa, dessa forma não tem muito material sobre isso ainda. Acabei sentindo a falta de um template maneiro para utilizar, sem ter que escrever todo o layout e tal. Foi aí que eu me lembrei do Lanyon. O Jigsaw era o que eu queria usar só faltava uma peça.

### Piece

Então eu peguei o Lanyon e transformei no [Piece](https://maicoqb.github.io/jigsaw-piece/), o primeiro template para Jigsaw.

Foi uma experiência bem maneira. Me fez apreder mais sobre o Jigsaw, e consolidar a ideia de que realmente eu fiz bem em utilizá-lo.

O Piece é uma adaptação do Lanyon, não mereço nenhum crédio pelo layout do template, ele é todo do [@mdo](https://twitter.com/mdo "Mark Otto"), meu trabalho foi praticamente uma tradução de Jekyll com Ruby para Jigsaw com PHP, e algumas coisinhas novas, como a lógica de tags para relacionar os posts.

Para saber mais sobre o Piece, confere o [Github do projeto](https://github.com/maicoqb/jigsaw-piece).

E se você quiser contribuir é só fazar um PR lá que trocamos uma ideia.

