
<div id="disqus_thread"></div>
<script>

    @if($page_url)
        var disqus_config = function () {
            this.page.url = "{{ $page_url }}";  
            this.page.identifier = "{{ $page_identifier ?: $page_url }}"; 
        };
    @endif
    
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://maicoqb.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                  