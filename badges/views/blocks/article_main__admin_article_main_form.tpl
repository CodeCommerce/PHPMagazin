[{$smarty.block.parent}] [{* Elternelement ausgeben *}]
[{assign var=oConfig value=$oViewConf->getConfig()}] [{* Konfigration laden *}]
[{assign var=aBadges value=$oConfig->getConfigParam('aPhpMagArticleBadges')}] [{* Konfigurationsvariable aus metadata.php *}]

[{if $aBadges}]
    <tr>
        <td class="edittext">
            [{oxmultilang ident="PHPMAG_BADGE"}]
        </td>
        <td class="edittext">
            <select class="editinput" name="editval[oxarticles__phpmagbadge]" [{$readonly}]>
                <option value="" selected>---</option>
                [{foreach from=$aBadges item=sBadge key=sKey}]
                    <option value="[{$sBadge}]"[{if $edit->oxarticles__phpmagbadge->value == $sBadge}] selected[{/if}]>[{$sKey}]</option>
                [{/foreach}]
            </select>
        </td>
    </tr>
[{/if}]