<div class="card-body flush">
{$description|clean_html|safe}

{if isset($attachments)}
<div class="has-attachment card collapsible">
    <div class="card-header">
        <a class="text-left collapsed" aria-expanded="false" href="#cv-attach-{$id}{if $artefactid}-{$artefactid}{/if}" data-toggle="collapse">
            <span class="icon left icon-paperclip icon-sm" role="presentation" aria-hidden="true"></span>

            <span class="text-small">{str tag=attachedfiles section=artefact.blog}</span>
            <span class="metadata">({$count})</span>
            <span class="icon icon-chevron-down float-right collapse-indicator" role="presentation" aria-hidden="true"></span>
        </a>
    </div>

    <!-- Attachment list with view and download link -->
    <div id="cv-attach-{$id}{if $artefactid}-{$artefactid}{/if}" class="collapse">
        <ul class="list-unstyled list-group">
        {foreach from=$attachments item=item}
        {if !$item->allowcomments}
            {assign var="justdetails" value=true}
        {/if}
        {include
            file='header/block-comments-details-header.tpl'
            artefactid=$item->id
            commentcount=$item->commentcount
            allowcomments=$item->allowcomments
            justdetails=$justdetails
            displayiconsonly = true}
            <li class="list-group-item">
                <a href="{$item->downloadpath}" class="outer-link icon-on-hover">
                    <span class="sr-only">
                        {str tag=Download section=artefact.file} {$item->title}
                    </span>
                </a>

                {if $item->iconpath}
                <img class="file-icon" src="{$item->iconpath}" alt="">
                {else}
                <span class="icon icon-{$item->artefacttype} icon-lg text-default" role="presentation" aria-hidden="true"></span>
                {/if}

                <span class="title">
                    {if !$editing}
                    <a class="modal_link text-small inner-link" data-toggle="modal-docked" data-target="#configureblock" href="#" data-blockid="{$blockid}" data-artefactid="{$item->id}">
                        {$item->title}
                    </a>
                    {else}
                    <span class="text-small inner-link">{$item->title}</span>
                    {/if}
                    <span class="metadata"> -
                        [{$item->size|display_size}]
                    </span>
                </span>

                <span class="icon icon-download icon-lg float-right text-watermark icon-action" role="presentation" aria-hidden="true"></span>
            </li>
        {/foreach}
        </ul>
    </div>
</div>
{/if}
</div>
