<?php

class partial_List_Item_88f15b7592a68fd016bcdf8c888434740f0ae9d5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output0 = '';

$output0 .= '
<!--
	=====================
		Partials/List/Item.html
-->
<div class="article articletype-';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.type')]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};
$arguments1 = [];
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = [];
$array3['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.istopnews');

$expression4 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression4(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['then'] = ' topnews';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '" itemscope="itemscope" itemtype="https://schema.org/Article">
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};
$arguments5 = [];
$arguments5['newsItem'] = NULL;
$arguments5['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '
	<!-- header -->
	<div class="header">
		<h3>
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
$output9 = '';

$output9 .= '
				<span itemprop="headline">';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title')]);

$output9 .= '</span>
			';
return $output9;
};
$arguments7 = [];
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['aria'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['newsItem'] = NULL;
$arguments7['settings'] = array (
);
$arguments7['uriOnly'] = false;
$arguments7['configuration'] = array (
);
$arguments7['content'] = '';
$arguments7['section'] = NULL;
$arguments7['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$arguments7['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments7['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title');

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
		</h3>
	</div>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
$output79 = '';

$output79 .= '
		<!-- media preview element -->
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure81 = function() use ($renderingContext) {
$output82 = '';

$output82 .= '
			<div class="news-img-wrap">
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
$output85 = '';

$output85 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure87 = function() use ($renderingContext) {
$output89 = '';

$output89 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext) {
$output94 = '';

$output94 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure96 = function() use ($renderingContext) {
return NULL;
};
$arguments95 = [];
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['aria'] = NULL;
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['id'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$arguments95['alt'] = NULL;
$arguments95['ismap'] = NULL;
$arguments95['longdesc'] = NULL;
$arguments95['usemap'] = NULL;
$arguments95['loading'] = NULL;
$arguments95['decoding'] = NULL;
$arguments95['src'] = '';
$arguments95['treatIdAsReference'] = false;
$arguments95['image'] = NULL;
$arguments95['crop'] = NULL;
$arguments95['cropVariant'] = 'default';
$arguments95['fileExtension'] = NULL;
$arguments95['width'] = NULL;
$arguments95['height'] = NULL;
$arguments95['minWidth'] = NULL;
$arguments95['minHeight'] = NULL;
$arguments95['maxWidth'] = NULL;
$arguments95['maxHeight'] = NULL;
$arguments95['absolute'] = false;
$arguments95['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments95['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title');
$arguments95['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative');
$arguments95['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure98 = function() use ($renderingContext) {
return NULL;
};
$arguments97 = [];
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$arguments97['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array99 = [];
$array99['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression100 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments97['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments97['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments97['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments95['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure102 = function() use ($renderingContext) {
return NULL;
};
$arguments101 = [];
$arguments101['then'] = NULL;
$arguments101['else'] = NULL;
$arguments101['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = [];
$array103['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression104 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments101['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments101['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments101['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments95['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
						';
return $output94;
};
$arguments90 = [];
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = [];
$array92['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array92['1'] = ' == 2';

$expression93 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression93(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments90['__thenClosure'] = $renderChildrenClosure91;

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure106 = function() use ($renderingContext) {
$output109 = '';

$output109 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure111 = function() use ($renderingContext) {
return NULL;
};
$arguments110 = [];
$arguments110['section'] = NULL;
$arguments110['partial'] = NULL;
$arguments110['delegate'] = NULL;
$arguments110['renderable'] = NULL;
$arguments110['arguments'] = array (
);
$arguments110['optional'] = false;
$arguments110['default'] = NULL;
$arguments110['contentAs'] = NULL;
$arguments110['debug'] = true;
$arguments110['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array112 = [];
$array112['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments110['arguments'] = $array112;

$output109 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '
						';
return $output109;
};
$arguments105 = [];
$arguments105['then'] = NULL;
$arguments105['else'] = NULL;
$arguments105['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array107 = [];
$array107['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array107['1'] = ' == 4';

$expression108 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 4);};
$arguments105['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression108(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array107)
					),
					$renderingContext
				);
$arguments105['__thenClosure'] = $renderChildrenClosure106;

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output89 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
$output117 = '';

$output117 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure119 = function() use ($renderingContext) {
return NULL;
};
$arguments118 = [];
$arguments118['additionalAttributes'] = NULL;
$arguments118['data'] = NULL;
$arguments118['aria'] = NULL;
$arguments118['class'] = NULL;
$arguments118['dir'] = NULL;
$arguments118['id'] = NULL;
$arguments118['lang'] = NULL;
$arguments118['style'] = NULL;
$arguments118['title'] = NULL;
$arguments118['accesskey'] = NULL;
$arguments118['tabindex'] = NULL;
$arguments118['onclick'] = NULL;
$arguments118['alt'] = NULL;
$arguments118['ismap'] = NULL;
$arguments118['longdesc'] = NULL;
$arguments118['usemap'] = NULL;
$arguments118['loading'] = NULL;
$arguments118['decoding'] = NULL;
$arguments118['src'] = '';
$arguments118['treatIdAsReference'] = false;
$arguments118['image'] = NULL;
$arguments118['crop'] = NULL;
$arguments118['cropVariant'] = 'default';
$arguments118['fileExtension'] = NULL;
$arguments118['width'] = NULL;
$arguments118['height'] = NULL;
$arguments118['minWidth'] = NULL;
$arguments118['minHeight'] = NULL;
$arguments118['maxWidth'] = NULL;
$arguments118['maxHeight'] = NULL;
$arguments118['absolute'] = false;
$arguments118['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments118['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title');
$arguments118['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative');
$arguments118['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure121 = function() use ($renderingContext) {
return NULL;
};
$arguments120 = [];
$arguments120['then'] = NULL;
$arguments120['else'] = NULL;
$arguments120['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array122 = [];
$array122['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression123 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments120['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression123(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)
					),
					$renderingContext
				);
$arguments120['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments120['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments118['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure125 = function() use ($renderingContext) {
return NULL;
};
$arguments124 = [];
$arguments124['then'] = NULL;
$arguments124['else'] = NULL;
$arguments124['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array126 = [];
$array126['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression127 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments124['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression127(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array126)
					),
					$renderingContext
				);
$arguments124['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments124['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments118['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
						';
return $output117;
};
$arguments113 = [];
$arguments113['then'] = NULL;
$arguments113['else'] = NULL;
$arguments113['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array115 = [];
$array115['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array115['1'] = ' == 5';

$expression116 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 5);};
$arguments113['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array115)
					),
					$renderingContext
				);
$arguments113['__thenClosure'] = $renderChildrenClosure114;

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output89 .= '
					';
return $output89;
};
$arguments86 = [];
$arguments86['map'] = NULL;
// Rendering Array
$array88 = [];
$array88['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0');
$arguments86['map'] = $array88;

$output85 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '
				';
return $output85;
};
$arguments83 = [];
$arguments83['additionalAttributes'] = NULL;
$arguments83['data'] = NULL;
$arguments83['aria'] = NULL;
$arguments83['class'] = NULL;
$arguments83['dir'] = NULL;
$arguments83['id'] = NULL;
$arguments83['lang'] = NULL;
$arguments83['style'] = NULL;
$arguments83['title'] = NULL;
$arguments83['accesskey'] = NULL;
$arguments83['tabindex'] = NULL;
$arguments83['onclick'] = NULL;
$arguments83['newsItem'] = NULL;
$arguments83['settings'] = array (
);
$arguments83['uriOnly'] = false;
$arguments83['configuration'] = array (
);
$arguments83['content'] = '';
$arguments83['section'] = NULL;
$arguments83['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$arguments83['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments83['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title');

$output82 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
			</div>
		';
return $output82;
};
$arguments80 = [];

$output79 .= '';

$output79 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure129 = function() use ($renderingContext) {
$output130 = '';

$output130 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure132 = function() use ($renderingContext) {
$output135 = '';

$output135 .= '
				<div class="news-img-wrap">
					<span class="no-media-element">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure137 = function() use ($renderingContext) {
$output138 = '';

$output138 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure140 = function() use ($renderingContext) {
return NULL;
};
$arguments139 = [];
$arguments139['additionalAttributes'] = NULL;
$arguments139['data'] = NULL;
$arguments139['aria'] = NULL;
$arguments139['class'] = NULL;
$arguments139['dir'] = NULL;
$arguments139['id'] = NULL;
$arguments139['lang'] = NULL;
$arguments139['style'] = NULL;
$arguments139['title'] = NULL;
$arguments139['accesskey'] = NULL;
$arguments139['tabindex'] = NULL;
$arguments139['onclick'] = NULL;
$arguments139['alt'] = NULL;
$arguments139['ismap'] = NULL;
$arguments139['longdesc'] = NULL;
$arguments139['usemap'] = NULL;
$arguments139['loading'] = NULL;
$arguments139['decoding'] = NULL;
$arguments139['src'] = '';
$arguments139['treatIdAsReference'] = false;
$arguments139['image'] = NULL;
$arguments139['crop'] = NULL;
$arguments139['cropVariant'] = 'default';
$arguments139['fileExtension'] = NULL;
$arguments139['width'] = NULL;
$arguments139['height'] = NULL;
$arguments139['minWidth'] = NULL;
$arguments139['minHeight'] = NULL;
$arguments139['maxWidth'] = NULL;
$arguments139['maxHeight'] = NULL;
$arguments139['absolute'] = false;
$arguments139['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage');
$arguments139['title'] = '';
$arguments139['alt'] = '';
$arguments139['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure142 = function() use ($renderingContext) {
return NULL;
};
$arguments141 = [];
$arguments141['then'] = NULL;
$arguments141['else'] = NULL;
$arguments141['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array143 = [];
$array143['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression144 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments141['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array143)
					),
					$renderingContext
				);
$arguments141['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments141['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments139['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure146 = function() use ($renderingContext) {
return NULL;
};
$arguments145 = [];
$arguments145['then'] = NULL;
$arguments145['else'] = NULL;
$arguments145['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array147 = [];
$array147['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression148 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments145['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array147)
					),
					$renderingContext
				);
$arguments145['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments145['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments139['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '
						';
return $output138;
};
$arguments136 = [];
$arguments136['additionalAttributes'] = NULL;
$arguments136['data'] = NULL;
$arguments136['aria'] = NULL;
$arguments136['class'] = NULL;
$arguments136['dir'] = NULL;
$arguments136['id'] = NULL;
$arguments136['lang'] = NULL;
$arguments136['style'] = NULL;
$arguments136['title'] = NULL;
$arguments136['accesskey'] = NULL;
$arguments136['tabindex'] = NULL;
$arguments136['onclick'] = NULL;
$arguments136['newsItem'] = NULL;
$arguments136['settings'] = array (
);
$arguments136['uriOnly'] = false;
$arguments136['configuration'] = array (
);
$arguments136['content'] = '';
$arguments136['section'] = NULL;
$arguments136['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$arguments136['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments136['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title');

$output135 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
					</span>
				</div>
			';
return $output135;
};
$arguments131 = [];
$arguments131['then'] = NULL;
$arguments131['else'] = NULL;
$arguments131['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array133 = [];
$array133['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia');

$expression134 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments131['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);
$arguments131['__thenClosure'] = $renderChildrenClosure132;

$output130 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output130 .= '
		';
return $output130;
};
$arguments128 = [];
$arguments128['if'] = NULL;

$output79 .= '';

$output79 .= '
	';
return $output79;
};
$arguments10 = [];
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array77 = [];
$array77['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews');

$expression78 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = function() use ($renderingContext) {
$output12 = '';

$output12 .= '
			<div class="news-img-wrap">
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
$output15 = '';

$output15 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
$output19 = '';

$output19 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
$output24 = '';

$output24 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};
$arguments25 = [];
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['aria'] = NULL;
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$arguments25['alt'] = NULL;
$arguments25['ismap'] = NULL;
$arguments25['longdesc'] = NULL;
$arguments25['usemap'] = NULL;
$arguments25['loading'] = NULL;
$arguments25['decoding'] = NULL;
$arguments25['src'] = '';
$arguments25['treatIdAsReference'] = false;
$arguments25['image'] = NULL;
$arguments25['crop'] = NULL;
$arguments25['cropVariant'] = 'default';
$arguments25['fileExtension'] = NULL;
$arguments25['width'] = NULL;
$arguments25['height'] = NULL;
$arguments25['minWidth'] = NULL;
$arguments25['minHeight'] = NULL;
$arguments25['maxWidth'] = NULL;
$arguments25['maxHeight'] = NULL;
$arguments25['absolute'] = false;
$arguments25['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments25['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title');
$arguments25['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative');
$arguments25['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return NULL;
};
$arguments27 = [];
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$arguments27['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array29 = [];
$array29['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments27['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$arguments27['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments27['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments25['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};
$arguments31 = [];
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = [];
$array33['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression34 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments31['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments31['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments25['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
						';
return $output24;
};
$arguments20 = [];
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array22 = [];
$array22['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array22['1'] = ' == 2';

$expression23 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = $renderChildrenClosure21;

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
$output39 = '';

$output39 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return NULL;
};
$arguments40 = [];
$arguments40['section'] = NULL;
$arguments40['partial'] = NULL;
$arguments40['delegate'] = NULL;
$arguments40['renderable'] = NULL;
$arguments40['arguments'] = array (
);
$arguments40['optional'] = false;
$arguments40['default'] = NULL;
$arguments40['contentAs'] = NULL;
$arguments40['debug'] = true;
$arguments40['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array42 = [];
$array42['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments40['arguments'] = $array42;

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
						';
return $output39;
};
$arguments35 = [];
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$arguments35['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = [];
$array37['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array37['1'] = ' == 4';

$expression38 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 4);};
$arguments35['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments35['__thenClosure'] = $renderChildrenClosure36;

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output19 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
$output47 = '';

$output47 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};
$arguments48 = [];
$arguments48['additionalAttributes'] = NULL;
$arguments48['data'] = NULL;
$arguments48['aria'] = NULL;
$arguments48['class'] = NULL;
$arguments48['dir'] = NULL;
$arguments48['id'] = NULL;
$arguments48['lang'] = NULL;
$arguments48['style'] = NULL;
$arguments48['title'] = NULL;
$arguments48['accesskey'] = NULL;
$arguments48['tabindex'] = NULL;
$arguments48['onclick'] = NULL;
$arguments48['alt'] = NULL;
$arguments48['ismap'] = NULL;
$arguments48['longdesc'] = NULL;
$arguments48['usemap'] = NULL;
$arguments48['loading'] = NULL;
$arguments48['decoding'] = NULL;
$arguments48['src'] = '';
$arguments48['treatIdAsReference'] = false;
$arguments48['image'] = NULL;
$arguments48['crop'] = NULL;
$arguments48['cropVariant'] = 'default';
$arguments48['fileExtension'] = NULL;
$arguments48['width'] = NULL;
$arguments48['height'] = NULL;
$arguments48['minWidth'] = NULL;
$arguments48['minHeight'] = NULL;
$arguments48['maxWidth'] = NULL;
$arguments48['maxHeight'] = NULL;
$arguments48['absolute'] = false;
$arguments48['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments48['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title');
$arguments48['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative');
$arguments48['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};
$arguments50 = [];
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$arguments50['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array52 = [];
$array52['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments50['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments50['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments50['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments48['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
return NULL;
};
$arguments54 = [];
$arguments54['then'] = NULL;
$arguments54['else'] = NULL;
$arguments54['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array56 = [];
$array56['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression57 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments54['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression57(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)
					),
					$renderingContext
				);
$arguments54['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments54['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments48['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
						';
return $output47;
};
$arguments43 = [];
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$arguments43['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array45 = [];
$array45['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array45['1'] = ' == 5';

$expression46 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 5);};
$arguments43['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression46(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)
					),
					$renderingContext
				);
$arguments43['__thenClosure'] = $renderChildrenClosure44;

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output19 .= '
					';
return $output19;
};
$arguments16 = [];
$arguments16['map'] = NULL;
// Rendering Array
$array18 = [];
$array18['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0');
$arguments16['map'] = $array18;

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
				';
return $output15;
};
$arguments13 = [];
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['aria'] = NULL;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['newsItem'] = NULL;
$arguments13['settings'] = array (
);
$arguments13['uriOnly'] = false;
$arguments13['configuration'] = array (
);
$arguments13['content'] = '';
$arguments13['section'] = NULL;
$arguments13['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$arguments13['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments13['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title');

$output12 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
			</div>
		';
return $output12;
};
$arguments10['__elseClosures'][] = function() use ($renderingContext) {
$output58 = '';

$output58 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
$output63 = '';

$output63 .= '
				<div class="news-img-wrap">
					<span class="no-media-element">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
$output66 = '';

$output66 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
return NULL;
};
$arguments67 = [];
$arguments67['additionalAttributes'] = NULL;
$arguments67['data'] = NULL;
$arguments67['aria'] = NULL;
$arguments67['class'] = NULL;
$arguments67['dir'] = NULL;
$arguments67['id'] = NULL;
$arguments67['lang'] = NULL;
$arguments67['style'] = NULL;
$arguments67['title'] = NULL;
$arguments67['accesskey'] = NULL;
$arguments67['tabindex'] = NULL;
$arguments67['onclick'] = NULL;
$arguments67['alt'] = NULL;
$arguments67['ismap'] = NULL;
$arguments67['longdesc'] = NULL;
$arguments67['usemap'] = NULL;
$arguments67['loading'] = NULL;
$arguments67['decoding'] = NULL;
$arguments67['src'] = '';
$arguments67['treatIdAsReference'] = false;
$arguments67['image'] = NULL;
$arguments67['crop'] = NULL;
$arguments67['cropVariant'] = 'default';
$arguments67['fileExtension'] = NULL;
$arguments67['width'] = NULL;
$arguments67['height'] = NULL;
$arguments67['minWidth'] = NULL;
$arguments67['minHeight'] = NULL;
$arguments67['maxWidth'] = NULL;
$arguments67['maxHeight'] = NULL;
$arguments67['absolute'] = false;
$arguments67['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage');
$arguments67['title'] = '';
$arguments67['alt'] = '';
$arguments67['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
return NULL;
};
$arguments69 = [];
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = [];
$array71['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression72 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments69['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments69['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments67['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
return NULL;
};
$arguments73 = [];
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array75 = [];
$array75['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression76 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression76(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
$arguments73['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments73['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments67['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
						';
return $output66;
};
$arguments64 = [];
$arguments64['additionalAttributes'] = NULL;
$arguments64['data'] = NULL;
$arguments64['aria'] = NULL;
$arguments64['class'] = NULL;
$arguments64['dir'] = NULL;
$arguments64['id'] = NULL;
$arguments64['lang'] = NULL;
$arguments64['style'] = NULL;
$arguments64['title'] = NULL;
$arguments64['accesskey'] = NULL;
$arguments64['tabindex'] = NULL;
$arguments64['onclick'] = NULL;
$arguments64['newsItem'] = NULL;
$arguments64['settings'] = array (
);
$arguments64['uriOnly'] = false;
$arguments64['configuration'] = array (
);
$arguments64['content'] = '';
$arguments64['section'] = NULL;
$arguments64['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$arguments64['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments64['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title');

$output63 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
					</span>
				</div>
			';
return $output63;
};
$arguments59 = [];
$arguments59['then'] = NULL;
$arguments59['else'] = NULL;
$arguments59['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array61 = [];
$array61['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia');

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments59['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)
					),
					$renderingContext
				);
$arguments59['__thenClosure'] = $renderChildrenClosure60;

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
		';
return $output58;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '


	<!-- teaser -->
	<div class="teaser-text">
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper
$renderChildrenClosure150 = function() use ($renderingContext) {
$output151 = '';

$output151 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure153 = function() use ($renderingContext) {
$output170 = '';

$output170 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure172 = function() use ($renderingContext) {
$output173 = '';

$output173 .= '
				<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure175 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure177 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser');
};
$arguments176 = [];
$arguments176['maxCharacters'] = NULL;
$arguments176['append'] = '&hellip;';
$arguments176['respectWordBoundaries'] = true;
$arguments176['respectHtml'] = true;
$arguments176['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters');
// Rendering Boolean node
// Rendering Array
$array178 = [];
$array178['0'] = 1;

$expression179 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments176['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression179(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);
};
$arguments174 = [];
$arguments174['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output173 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output173 .= '</div>
			';
return $output173;
};
$arguments171 = [];

$output170 .= '';

$output170 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure181 = function() use ($renderingContext) {
$output182 = '';

$output182 .= '
				<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure184 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure186 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext');
};
$arguments185 = [];
$arguments185['maxCharacters'] = NULL;
$arguments185['append'] = '&hellip;';
$arguments185['respectWordBoundaries'] = true;
$arguments185['respectHtml'] = true;
$arguments185['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters');
// Rendering Boolean node
// Rendering Array
$array187 = [];
$array187['0'] = 1;

$expression188 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments185['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression188(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array187)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);
};
$arguments183 = [];
$arguments183['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output182 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output182 .= '</div>
			';
return $output182;
};
$arguments180 = [];
$arguments180['if'] = NULL;

$output170 .= '';

$output170 .= '
		';
return $output170;
};
$arguments152 = [];
$arguments152['then'] = NULL;
$arguments152['else'] = NULL;
$arguments152['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array168 = [];
$array168['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser');

$expression169 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments152['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression169(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array168)
					),
					$renderingContext
				);
$arguments152['__thenClosure'] = function() use ($renderingContext) {
$output154 = '';

$output154 .= '
				<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure156 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure158 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser');
};
$arguments157 = [];
$arguments157['maxCharacters'] = NULL;
$arguments157['append'] = '&hellip;';
$arguments157['respectWordBoundaries'] = true;
$arguments157['respectHtml'] = true;
$arguments157['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters');
// Rendering Boolean node
// Rendering Array
$array159 = [];
$array159['0'] = 1;

$expression160 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments157['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression160(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array159)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);
};
$arguments155 = [];
$arguments155['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output154 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output154 .= '</div>
			';
return $output154;
};
$arguments152['__elseClosures'][] = function() use ($renderingContext) {
$output161 = '';

$output161 .= '
				<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure163 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure165 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext');
};
$arguments164 = [];
$arguments164['maxCharacters'] = NULL;
$arguments164['append'] = '&hellip;';
$arguments164['respectWordBoundaries'] = true;
$arguments164['respectHtml'] = true;
$arguments164['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters');
// Rendering Boolean node
// Rendering Array
$array166 = [];
$array166['0'] = 1;

$expression167 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments164['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression167(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array166)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);
};
$arguments162 = [];
$arguments162['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output161 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output161 .= '</div>
			';
return $output161;
};

$output151 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output151 .= '
		';
return $output151;
};
$arguments149 = [];

$output0 .= GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output0 .= '

		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure190 = function() use ($renderingContext) {
$output191 = '';

$output191 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure193 = function() use ($renderingContext) {
return NULL;
};
$arguments192 = [];
$arguments192['key'] = NULL;
$arguments192['id'] = NULL;
$arguments192['default'] = NULL;
$arguments192['arguments'] = NULL;
$arguments192['extensionName'] = NULL;
$arguments192['languageKey'] = NULL;
$arguments192['alternativeLanguageKeys'] = NULL;
$arguments192['key'] = 'more-link';

$output191 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext)]);

$output191 .= '
		';
return $output191;
};
$arguments189 = [];
$arguments189['additionalAttributes'] = NULL;
$arguments189['data'] = NULL;
$arguments189['aria'] = NULL;
$arguments189['class'] = NULL;
$arguments189['dir'] = NULL;
$arguments189['id'] = NULL;
$arguments189['lang'] = NULL;
$arguments189['style'] = NULL;
$arguments189['title'] = NULL;
$arguments189['accesskey'] = NULL;
$arguments189['tabindex'] = NULL;
$arguments189['onclick'] = NULL;
$arguments189['newsItem'] = NULL;
$arguments189['settings'] = array (
);
$arguments189['uriOnly'] = false;
$arguments189['configuration'] = array (
);
$arguments189['content'] = '';
$arguments189['section'] = NULL;
$arguments189['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$arguments189['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments189['class'] = 'more';
$arguments189['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title');

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output0 .= '
	</div>

	<!-- footer information -->
	<div class="footer">
		<p>
			<!-- date -->
			<span class="news-list-date">
				<time itemprop="datePublished" datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure195 = function() use ($renderingContext) {
return NULL;
};
$arguments194 = [];
$arguments194['date'] = NULL;
$arguments194['format'] = '';
$arguments194['base'] = NULL;
$arguments194['date'] = $renderingContext->getVariableProvider()->getByPath('newsItem.datetime');
$arguments194['format'] = 'Y-m-d';
$renderChildrenClosure195 = ($arguments194['date'] !== null) ? function() use ($arguments194) { return $arguments194['date']; } : $renderChildrenClosure195;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext)]);

$output0 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure197 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('newsItem.datetime');
};
$arguments196 = [];
$arguments196['date'] = NULL;
$arguments196['format'] = '';
$arguments196['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure199 = function() use ($renderingContext) {
return NULL;
};
$arguments198 = [];
$arguments198['key'] = NULL;
$arguments198['id'] = NULL;
$arguments198['default'] = NULL;
$arguments198['arguments'] = NULL;
$arguments198['extensionName'] = NULL;
$arguments198['languageKey'] = NULL;
$arguments198['alternativeLanguageKeys'] = NULL;
$arguments198['key'] = 'dateFormat';
$arguments196['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);
$renderChildrenClosure197 = ($arguments196['date'] !== null) ? function() use ($arguments196) { return $arguments196['date']; } : $renderChildrenClosure197;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext)]);

$output0 .= '
				</time>
			</span>

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure201 = function() use ($renderingContext) {
$output204 = '';

$output204 .= '
				<!-- first category -->
				<span class="news-list-category">';

$output204 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.firstCategory.title')]);

$output204 .= '</span>
			';
return $output204;
};
$arguments200 = [];
$arguments200['then'] = NULL;
$arguments200['else'] = NULL;
$arguments200['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array202 = [];
$array202['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.firstCategory');

$expression203 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments200['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression203(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array202)
					),
					$renderingContext
				);
$arguments200['__thenClosure'] = $renderChildrenClosure201;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output0 .= '

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure206 = function() use ($renderingContext) {
$output209 = '';

$output209 .= '
				<!-- Tags -->
				<span class="news-list-tags" itemprop="keywords">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure211 = function() use ($renderingContext) {
$output212 = '';

$output212 .= '
						';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.title')]);

$output212 .= '
					';
return $output212;
};
$arguments210 = [];
$arguments210['each'] = NULL;
$arguments210['as'] = NULL;
$arguments210['key'] = NULL;
$arguments210['reverse'] = false;
$arguments210['iteration'] = NULL;
$arguments210['each'] = $renderingContext->getVariableProvider()->getByPath('newsItem.tags');
$arguments210['as'] = 'tag';

$output209 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output209 .= '
				</span>
			';
return $output209;
};
$arguments205 = [];
$arguments205['then'] = NULL;
$arguments205['else'] = NULL;
$arguments205['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array207 = [];
$array207['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.tags');

$expression208 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments205['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression208(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array207)
					),
					$renderingContext
				);
$arguments205['__thenClosure'] = $renderChildrenClosure206;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output0 .= '

			<!-- author -->
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure214 = function() use ($renderingContext) {
$output217 = '';

$output217 .= '
				<span class="news-list-author">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure219 = function() use ($renderingContext) {
return NULL;
};
$arguments218 = [];
$arguments218['key'] = NULL;
$arguments218['id'] = NULL;
$arguments218['default'] = NULL;
$arguments218['arguments'] = NULL;
$arguments218['extensionName'] = NULL;
$arguments218['languageKey'] = NULL;
$arguments218['alternativeLanguageKeys'] = NULL;
$arguments218['key'] = 'author';
// Rendering Array
$array220 = [];
$array220['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.author');
$arguments218['arguments'] = $array220;

$output217 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext)]);

$output217 .= '
				</span>
			';
return $output217;
};
$arguments213 = [];
$arguments213['then'] = NULL;
$arguments213['else'] = NULL;
$arguments213['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array215 = [];
$array215['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.author');

$expression216 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments213['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression216(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array215)
					),
					$renderingContext
				);
$arguments213['__thenClosure'] = $renderChildrenClosure214;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output0 .= '
		</p>
	</div>
</div>

';

return $output0;
}


}
#