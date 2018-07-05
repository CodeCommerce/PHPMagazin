[{assign var=sBadgePath value=$oDetailsProduct->getBadge()}]

[{if $sBadgePath}]
    <img src="[{$sBadgePath}]">
[{/if}]
[{$smarty.block.parent}]
