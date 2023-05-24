<?php

class partial_List_Temoin_3a92006cc59c97ed57b2180bd9b331bf9e6f9e0c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="single-testimonial-slide text-center">
    <h5>';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title')]);

$output0 .= '</h5>
    <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext');
};
$arguments3 = [];
$arguments3['maxCharacters'] = NULL;
$arguments3['append'] = '&hellip;';
$arguments3['respectWordBoundaries'] = true;
$arguments3['respectHtml'] = true;
$arguments3['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters');
// Rendering Boolean node
// Rendering Array
$array5 = [];
$array5['0'] = 1;

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);
};
$arguments1 = [];
$arguments1['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '</p>

    <div class="testimonial-author-info">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
$output76 = '';

$output76 .= '
		<!-- media preview element -->
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure78 = function() use ($renderingContext) {
$output79 = '';

$output79 .= '
			<div class="news-img-wrap">
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure81 = function() use ($renderingContext) {
$output82 = '';

$output82 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
$output86 = '';

$output86 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure88 = function() use ($renderingContext) {
$output91 = '';

$output91 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure93 = function() use ($renderingContext) {
return NULL;
};
$arguments92 = [];
$arguments92['additionalAttributes'] = NULL;
$arguments92['data'] = NULL;
$arguments92['aria'] = NULL;
$arguments92['class'] = NULL;
$arguments92['dir'] = NULL;
$arguments92['id'] = NULL;
$arguments92['lang'] = NULL;
$arguments92['style'] = NULL;
$arguments92['title'] = NULL;
$arguments92['accesskey'] = NULL;
$arguments92['tabindex'] = NULL;
$arguments92['onclick'] = NULL;
$arguments92['alt'] = NULL;
$arguments92['ismap'] = NULL;
$arguments92['longdesc'] = NULL;
$arguments92['usemap'] = NULL;
$arguments92['loading'] = NULL;
$arguments92['decoding'] = NULL;
$arguments92['src'] = '';
$arguments92['treatIdAsReference'] = false;
$arguments92['image'] = NULL;
$arguments92['crop'] = NULL;
$arguments92['cropVariant'] = 'default';
$arguments92['fileExtension'] = NULL;
$arguments92['width'] = NULL;
$arguments92['height'] = NULL;
$arguments92['minWidth'] = NULL;
$arguments92['minHeight'] = NULL;
$arguments92['maxWidth'] = NULL;
$arguments92['maxHeight'] = NULL;
$arguments92['absolute'] = false;
$arguments92['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments92['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title');
$arguments92['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative');
$arguments92['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure95 = function() use ($renderingContext) {
return NULL;
};
$arguments94 = [];
$arguments94['then'] = NULL;
$arguments94['else'] = NULL;
$arguments94['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array96 = [];
$array96['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments94['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array96)
					),
					$renderingContext
				);
$arguments94['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments94['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments92['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure99 = function() use ($renderingContext) {
return NULL;
};
$arguments98 = [];
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$arguments98['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array100 = [];
$array100['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression101 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments98['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression101(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)
					),
					$renderingContext
				);
$arguments98['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments98['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments92['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output91 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '
						';
return $output91;
};
$arguments87 = [];
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$arguments87['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array89 = [];
$array89['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array89['1'] = ' == 2';

$expression90 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments87['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression90(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)
					),
					$renderingContext
				);
$arguments87['__thenClosure'] = $renderChildrenClosure88;

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure103 = function() use ($renderingContext) {
$output106 = '';

$output106 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure108 = function() use ($renderingContext) {
return NULL;
};
$arguments107 = [];
$arguments107['section'] = NULL;
$arguments107['partial'] = NULL;
$arguments107['delegate'] = NULL;
$arguments107['renderable'] = NULL;
$arguments107['arguments'] = array (
);
$arguments107['optional'] = false;
$arguments107['default'] = NULL;
$arguments107['contentAs'] = NULL;
$arguments107['debug'] = true;
$arguments107['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array109 = [];
$array109['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments107['arguments'] = $array109;

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
						';
return $output106;
};
$arguments102 = [];
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$arguments102['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array104 = [];
$array104['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array104['1'] = ' == 4';

$expression105 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 4);};
$arguments102['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)
					),
					$renderingContext
				);
$arguments102['__thenClosure'] = $renderChildrenClosure103;

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output86 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure111 = function() use ($renderingContext) {
$output114 = '';

$output114 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure116 = function() use ($renderingContext) {
return NULL;
};
$arguments115 = [];
$arguments115['additionalAttributes'] = NULL;
$arguments115['data'] = NULL;
$arguments115['aria'] = NULL;
$arguments115['class'] = NULL;
$arguments115['dir'] = NULL;
$arguments115['id'] = NULL;
$arguments115['lang'] = NULL;
$arguments115['style'] = NULL;
$arguments115['title'] = NULL;
$arguments115['accesskey'] = NULL;
$arguments115['tabindex'] = NULL;
$arguments115['onclick'] = NULL;
$arguments115['alt'] = NULL;
$arguments115['ismap'] = NULL;
$arguments115['longdesc'] = NULL;
$arguments115['usemap'] = NULL;
$arguments115['loading'] = NULL;
$arguments115['decoding'] = NULL;
$arguments115['src'] = '';
$arguments115['treatIdAsReference'] = false;
$arguments115['image'] = NULL;
$arguments115['crop'] = NULL;
$arguments115['cropVariant'] = 'default';
$arguments115['fileExtension'] = NULL;
$arguments115['width'] = NULL;
$arguments115['height'] = NULL;
$arguments115['minWidth'] = NULL;
$arguments115['minHeight'] = NULL;
$arguments115['maxWidth'] = NULL;
$arguments115['maxHeight'] = NULL;
$arguments115['absolute'] = false;
$arguments115['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments115['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title');
$arguments115['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative');
$arguments115['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure118 = function() use ($renderingContext) {
return NULL;
};
$arguments117 = [];
$arguments117['then'] = NULL;
$arguments117['else'] = NULL;
$arguments117['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array119 = [];
$array119['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments117['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);
$arguments117['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments117['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments115['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure122 = function() use ($renderingContext) {
return NULL;
};
$arguments121 = [];
$arguments121['then'] = NULL;
$arguments121['else'] = NULL;
$arguments121['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array123 = [];
$array123['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression124 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments121['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression124(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)
					),
					$renderingContext
				);
$arguments121['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments121['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments115['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '
						';
return $output114;
};
$arguments110 = [];
$arguments110['then'] = NULL;
$arguments110['else'] = NULL;
$arguments110['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array112 = [];
$array112['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array112['1'] = ' == 5';

$expression113 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 5);};
$arguments110['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression113(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)
					),
					$renderingContext
				);
$arguments110['__thenClosure'] = $renderChildrenClosure111;

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output86 .= '
					';
return $output86;
};
$arguments83 = [];
$arguments83['map'] = NULL;
// Rendering Array
$array85 = [];
$array85['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0');
$arguments83['map'] = $array85;

$output82 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
				';
return $output82;
};
$arguments80 = [];
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['aria'] = NULL;
$arguments80['class'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['onclick'] = NULL;
$arguments80['newsItem'] = NULL;
$arguments80['settings'] = array (
);
$arguments80['uriOnly'] = false;
$arguments80['configuration'] = array (
);
$arguments80['content'] = '';
$arguments80['section'] = NULL;
$arguments80['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$arguments80['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments80['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title');

$output79 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
			</div>
		';
return $output79;
};
$arguments77 = [];

$output76 .= '';

$output76 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure126 = function() use ($renderingContext) {
$output127 = '';

$output127 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure129 = function() use ($renderingContext) {
$output132 = '';

$output132 .= '
				<div class="news-img-wrap">
					<span class="no-media-element">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure134 = function() use ($renderingContext) {
$output135 = '';

$output135 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure137 = function() use ($renderingContext) {
return NULL;
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
$arguments136['alt'] = NULL;
$arguments136['ismap'] = NULL;
$arguments136['longdesc'] = NULL;
$arguments136['usemap'] = NULL;
$arguments136['loading'] = NULL;
$arguments136['decoding'] = NULL;
$arguments136['src'] = '';
$arguments136['treatIdAsReference'] = false;
$arguments136['image'] = NULL;
$arguments136['crop'] = NULL;
$arguments136['cropVariant'] = 'default';
$arguments136['fileExtension'] = NULL;
$arguments136['width'] = NULL;
$arguments136['height'] = NULL;
$arguments136['minWidth'] = NULL;
$arguments136['minHeight'] = NULL;
$arguments136['maxWidth'] = NULL;
$arguments136['maxHeight'] = NULL;
$arguments136['absolute'] = false;
$arguments136['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage');
$arguments136['title'] = '';
$arguments136['alt'] = '';
$arguments136['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure139 = function() use ($renderingContext) {
return NULL;
};
$arguments138 = [];
$arguments138['then'] = NULL;
$arguments138['else'] = NULL;
$arguments138['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array140 = [];
$array140['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression141 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments138['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression141(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array140)
					),
					$renderingContext
				);
$arguments138['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments138['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments136['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure143 = function() use ($renderingContext) {
return NULL;
};
$arguments142 = [];
$arguments142['then'] = NULL;
$arguments142['else'] = NULL;
$arguments142['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array144 = [];
$array144['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression145 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments142['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression145(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array144)
					),
					$renderingContext
				);
$arguments142['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments142['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments136['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output135 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
						';
return $output135;
};
$arguments133 = [];
$arguments133['additionalAttributes'] = NULL;
$arguments133['data'] = NULL;
$arguments133['aria'] = NULL;
$arguments133['class'] = NULL;
$arguments133['dir'] = NULL;
$arguments133['id'] = NULL;
$arguments133['lang'] = NULL;
$arguments133['style'] = NULL;
$arguments133['title'] = NULL;
$arguments133['accesskey'] = NULL;
$arguments133['tabindex'] = NULL;
$arguments133['onclick'] = NULL;
$arguments133['newsItem'] = NULL;
$arguments133['settings'] = array (
);
$arguments133['uriOnly'] = false;
$arguments133['configuration'] = array (
);
$arguments133['content'] = '';
$arguments133['section'] = NULL;
$arguments133['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$arguments133['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments133['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title');

$output132 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '
					</span>
				</div>
			';
return $output132;
};
$arguments128 = [];
$arguments128['then'] = NULL;
$arguments128['else'] = NULL;
$arguments128['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array130 = [];
$array130['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia');

$expression131 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments128['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression131(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array130)
					),
					$renderingContext
				);
$arguments128['__thenClosure'] = $renderChildrenClosure129;

$output127 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output127 .= '
		';
return $output127;
};
$arguments125 = [];
$arguments125['if'] = NULL;

$output76 .= '';

$output76 .= '
	';
return $output76;
};
$arguments7 = [];
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array74 = [];
$array74['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews');

$expression75 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = function() use ($renderingContext) {
$output9 = '';

$output9 .= '
			<div class="news-img-wrap">
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
$output12 = '';

$output12 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
$output16 = '';

$output16 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
$output21 = '';

$output21 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};
$arguments22 = [];
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['aria'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['alt'] = NULL;
$arguments22['ismap'] = NULL;
$arguments22['longdesc'] = NULL;
$arguments22['usemap'] = NULL;
$arguments22['loading'] = NULL;
$arguments22['decoding'] = NULL;
$arguments22['src'] = '';
$arguments22['treatIdAsReference'] = false;
$arguments22['image'] = NULL;
$arguments22['crop'] = NULL;
$arguments22['cropVariant'] = 'default';
$arguments22['fileExtension'] = NULL;
$arguments22['width'] = NULL;
$arguments22['height'] = NULL;
$arguments22['minWidth'] = NULL;
$arguments22['minHeight'] = NULL;
$arguments22['maxWidth'] = NULL;
$arguments22['maxHeight'] = NULL;
$arguments22['absolute'] = false;
$arguments22['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments22['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title');
$arguments22['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative');
$arguments22['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};
$arguments24 = [];
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = [];
$array26['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$arguments24['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments24['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments22['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};
$arguments28 = [];
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$arguments28['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = [];
$array30['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments28['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments28['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments28['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments22['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
						';
return $output21;
};
$arguments17 = [];
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array19 = [];
$array19['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array19['1'] = ' == 2';

$expression20 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = $renderChildrenClosure18;

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
$output36 = '';

$output36 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};
$arguments37 = [];
$arguments37['section'] = NULL;
$arguments37['partial'] = NULL;
$arguments37['delegate'] = NULL;
$arguments37['renderable'] = NULL;
$arguments37['arguments'] = array (
);
$arguments37['optional'] = false;
$arguments37['default'] = NULL;
$arguments37['contentAs'] = NULL;
$arguments37['debug'] = true;
$arguments37['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array39 = [];
$array39['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments37['arguments'] = $array39;

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
						';
return $output36;
};
$arguments32 = [];
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = [];
$array34['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array34['1'] = ' == 4';

$expression35 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 4);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments32['__thenClosure'] = $renderChildrenClosure33;

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output16 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
$output44 = '';

$output44 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};
$arguments45 = [];
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['aria'] = NULL;
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['alt'] = NULL;
$arguments45['ismap'] = NULL;
$arguments45['longdesc'] = NULL;
$arguments45['usemap'] = NULL;
$arguments45['loading'] = NULL;
$arguments45['decoding'] = NULL;
$arguments45['src'] = '';
$arguments45['treatIdAsReference'] = false;
$arguments45['image'] = NULL;
$arguments45['crop'] = NULL;
$arguments45['cropVariant'] = 'default';
$arguments45['fileExtension'] = NULL;
$arguments45['width'] = NULL;
$arguments45['height'] = NULL;
$arguments45['minWidth'] = NULL;
$arguments45['minHeight'] = NULL;
$arguments45['maxWidth'] = NULL;
$arguments45['maxHeight'] = NULL;
$arguments45['absolute'] = false;
$arguments45['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments45['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title');
$arguments45['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative');
$arguments45['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};
$arguments47 = [];
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array49 = [];
$array49['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression50 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$arguments47['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments47['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments45['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return NULL;
};
$arguments51 = [];
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array53 = [];
$array53['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression54 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
$arguments51['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments51['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments45['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
						';
return $output44;
};
$arguments40 = [];
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$arguments40['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array42 = [];
$array42['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array42['1'] = ' == 5';

$expression43 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 5);};
$arguments40['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)
					),
					$renderingContext
				);
$arguments40['__thenClosure'] = $renderChildrenClosure41;

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output16 .= '
					';
return $output16;
};
$arguments13 = [];
$arguments13['map'] = NULL;
// Rendering Array
$array15 = [];
$array15['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0');
$arguments13['map'] = $array15;

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
				';
return $output12;
};
$arguments10 = [];
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['aria'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['newsItem'] = NULL;
$arguments10['settings'] = array (
);
$arguments10['uriOnly'] = false;
$arguments10['configuration'] = array (
);
$arguments10['content'] = '';
$arguments10['section'] = NULL;
$arguments10['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$arguments10['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments10['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title');

$output9 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
			</div>
		';
return $output9;
};
$arguments7['__elseClosures'][] = function() use ($renderingContext) {
$output55 = '';

$output55 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
$output60 = '';

$output60 .= '
				<div class="news-img-wrap">
					<span class="no-media-element">
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
$output63 = '';

$output63 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
return NULL;
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
$arguments64['alt'] = NULL;
$arguments64['ismap'] = NULL;
$arguments64['longdesc'] = NULL;
$arguments64['usemap'] = NULL;
$arguments64['loading'] = NULL;
$arguments64['decoding'] = NULL;
$arguments64['src'] = '';
$arguments64['treatIdAsReference'] = false;
$arguments64['image'] = NULL;
$arguments64['crop'] = NULL;
$arguments64['cropVariant'] = 'default';
$arguments64['fileExtension'] = NULL;
$arguments64['width'] = NULL;
$arguments64['height'] = NULL;
$arguments64['minWidth'] = NULL;
$arguments64['minHeight'] = NULL;
$arguments64['maxWidth'] = NULL;
$arguments64['maxHeight'] = NULL;
$arguments64['absolute'] = false;
$arguments64['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage');
$arguments64['title'] = '';
$arguments64['alt'] = '';
$arguments64['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure67 = function() use ($renderingContext) {
return NULL;
};
$arguments66 = [];
$arguments66['then'] = NULL;
$arguments66['else'] = NULL;
$arguments66['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array68 = [];
$array68['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments66['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);
$arguments66['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments66['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments64['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext) {
return NULL;
};
$arguments70 = [];
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array72 = [];
$array72['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression73 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$arguments70['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments70['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments64['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
						';
return $output63;
};
$arguments61 = [];
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['aria'] = NULL;
$arguments61['class'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['newsItem'] = NULL;
$arguments61['settings'] = array (
);
$arguments61['uriOnly'] = false;
$arguments61['configuration'] = array (
);
$arguments61['content'] = '';
$arguments61['section'] = NULL;
$arguments61['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$arguments61['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments61['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title');

$output60 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
					</span>
				</div>
			';
return $output60;
};
$arguments56 = [];
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$arguments56['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array58 = [];
$array58['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia');

$expression59 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression59(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);
$arguments56['__thenClosure'] = $renderChildrenClosure57;

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
		';
return $output55;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure147 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure149 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser');
};
$arguments148 = [];
$arguments148['maxCharacters'] = NULL;
$arguments148['append'] = '&hellip;';
$arguments148['respectWordBoundaries'] = true;
$arguments148['respectHtml'] = true;
$arguments148['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters');
// Rendering Boolean node
// Rendering Array
$array150 = [];
$array150['0'] = 1;

$expression151 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments148['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array150)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);
};
$arguments146 = [];
$arguments146['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output0 .= '</p>
    </div>
</div>';

return $output0;
}


}
#