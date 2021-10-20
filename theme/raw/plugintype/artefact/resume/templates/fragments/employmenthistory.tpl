{if $controls}
<div class="card">
    {if !$hidetitle}
    <h3 class="resumeh3 card-header">
        {str tag='employmenthistory' section='artefact.resume'}
        {contextualhelp plugintype='artefact' pluginname='resume' section='addemploymenthistory'}
    </h3>
    {/if}

    <table id="employmenthistorylist{$suffix}" class="tablerenderer resumefive resumecomposite fullwidth table">
        <thead>
            <tr>
                <th class="resumecontrols">
                    <span class="accessible-hidden sr-only">{str tag=move}</span>
                </th>
                <th>{str tag='position' section='artefact.resume'}</th>
                <th class="resumeattachments">
                    <span>{str tag=Attachments section=artefact.resume}</span>
                </th>
                <th class="resumecontrols">
                    <span class="accessible-hidden sr-only">{str tag=edit}</span>
                </th>
            </tr>
        </thead>
        <!-- Table body is rendered by javascript on content-> resume -->
    </table>

    <div class="card-footer has-form">
        <div id="employmenthistoryform" class="collapse" data-action='focus-on-open reset-on-collapse'>
            {$compositeforms.employmenthistory|safe}
        </div>

        <button id="addemploymenthistorybutton" data-toggle="collapse" data-target="#employmenthistoryform" aria-expanded="false" aria-controls="employmenthistoryform" class="float-right btn btn-secondary btn-sm collapsed expand-add-button">
            <span class="show-form">
                {str tag='add'}
                <span class="icon icon-chevron-down right" role="presentation" aria-hidden="true"></span>
                <span class="accessible-hidden sr-only">{str tag='addemploymenthistory' section='artefact.resume'}</span>
            </span>
            <span class="hide-form">
                {str tag='cancel'}
                <span class="icon icon-chevron-up right" role="presentation" aria-hidden="true"></span>
            </span>
        </button>

        {if $license}
        <div class="license">
        {$license|safe}
        </div>
        {/if}
    </div>
</div>
{else}
<!-- Render employment blockinstance on page view -->
<div id="employmenthistorylist{$suffix}" class="list-group list-group-lite">
    {foreach from=$rows item=row}
    <div class="list-group-item">
        <h5 class="list-group-item-heading">
        {if $row->positiondescription || $row->attachments || $row->employeraddress}
            <a href="#employment-content-{$row->id}{if $artefactid}-{$artefactid}{/if}" class="text-left collapsed collapsible" aria-expanded="false" data-toggle="collapse">
                {$row->jobtitle} {str tag="at"} {$row->employer}
                <span class="icon icon-chevron-down float-right collapse-indicator" role="presentation" aria-hidden="true"></span>
                <br />
                <span class="text-small text-muted">
                    {$row->startdate}
                    {if $row->enddate} - {$row->enddate}{/if}
                </span>
            </a>
        {else}
            {$row->jobtitle} <span class="text-muted">{$row->employer}</span>
            <br />
            <span class="text-small text-muted">
                {$row->startdate}
                {if $row->enddate} - {$row->enddate}{/if}
            </span>
        {/if}
        </h5>

        <div id="employment-content-{$row->id}{if $artefactid}-{$artefactid}{/if}" class="collapse resume-content">
            {if $row->positiondescription}
            <p class="content-text">
                {$row->positiondescription|safe}
            </p>
            {/if}

            {if $row->employeraddress}
                <span class="text-small text-muted">
                    {str tag=addresstag section='blocktype.resume/entireresume' arg1=$row->employeraddress}
                </span>
            {/if}

            {if $row->attachments}
            <div class="has-attachment card">
                <div class="card-header">
                    <span class="icon icon-paperclip left icon-sm" role="presentation" aria-hidden="true"></span>
                    <span class="text-small">{str tag='attachedfiles' section='artefact.blog'}</span>
                    <span class="metadata">({$row->clipcount})</span>
                </div>
                <ul class="list-unstyled list-group">
                    {foreach from=$row->attachments item=item}
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
                            <span class="sr-only">{str tag=Download section=artefact.file} {$item->title}</span>
                        </a>

                        {if $item->iconpath}
                        <img class="file-icon" src="{$item->iconpath}" alt="">
                        {else}
                        <span class="icon icon-{$item->artefacttype} left icon-lg text-default" role="presentation" aria-hidden="true"></span>
                        {/if}

                        <span class="title">
                            {if !$editing}
                            <a class="modal_link text-small inner-link" data-toggle="modal-docked" data-target="#configureblock" href="#" data-artefactid="{$item->id}">
                                {$item->title}
                            </a>
                            {else}
                            <span class="text-small inner-link">{$item->title}</span>
                            {/if}
                            <span class="metadata"> -
                                [{$item->size}]
                            </span>
                        </span>

                        <span class="icon icon-download icon-lg float-right text-watermark icon-action" role="presentation" aria-hidden="true"></span>
                    </li>
                    {/foreach}
                </ul>
            </div>
            {/if}
        </div>
    </div>
    {/foreach}
</div>
{/if}
