                    </div><!-- end main-column -->

                </div><!-- mainmiddle -->

            </main>

            {if $SIDEBARS && $SIDEBLOCKS.right}
            <div class="col-md-3 sidebar">
                    {include file="sidebar.tpl" blocks=$SIDEBLOCKS.right}
            </div>
            {/if}

            {if $SIDEBARS && $SIDEBLOCKS.left}
            <div class="col-md-3 col-md-pull-9 sidebar">
                            {include file="sidebar.tpl" blocks=$SIDEBLOCKS.left}
            </div>
            {/if}

        </div><!-- row -->

    </div><!-- container -->

</div><!-- middle-container-wrap -->

<footer class="{if $editing == true}editcontent{/if} footer container">
    <div class="footer-inner">
        <div id="powered-by" class="pull-left mahara-logo">
            <a href="http://ioc.xtec.cat/educacio">
                <img src="{theme_url filename='images/logo_ioc.png'}" alt="Institut Obert de Catalunya">
            </a>
        </div>
        <!-- This site is powered by Mahara, an Open Source
        ePortfolio system. See http://mahara.org/ for more
        details.
        NOTE: this image and link are a way that you can
        support the Mahara project. Please consider
        displaying them on your site to spread the word! -->
        <ul class="nav nav-pills footer-nav pull-left">
        {foreach from=$FOOTERMENU item=item name=footermenu}
            <li>
                <a href="{$item.url}">{$item.title}</a>
            </li>
        {/foreach}
        </ul>
        <div class="metadata pull-right mahara-version" id="version">
            {mahara_version}
        </div>

        <div class="metadata text-center fullwidth site-performace">
            <!-- there is a div id="performance-info" wrapping this -->
            {mahara_performance_info}
        </div>
    </div>
</footer><!-- footer-wrap -->
{if $ADDITIONALHTMLFOOTER}{$ADDITIONALHTMLFOOTER|safe}{/if}
</body>
</html>
