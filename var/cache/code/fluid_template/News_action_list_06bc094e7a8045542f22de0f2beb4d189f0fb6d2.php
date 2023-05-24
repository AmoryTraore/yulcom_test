<?php

class News_action_list_06bc094e7a8045542f22de0f2beb4d189f0fb6d2 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
return (string) 'General';
}
public function hasLayout() {
return TRUE;
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
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output0 = '';

$output0 .= '
	<!--TYPO3SEARCH_end-->
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output78 = '';

$output78 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure80 = function() use ($renderingContext) {
$output81 = '';

$output81 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext) {
$output105 = '';

$output105 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure107 = function() use ($renderingContext) {
$output108 = '';

$output108 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure110 = function() use ($renderingContext) {
return NULL;
};
$arguments109 = [];
$arguments109['section'] = NULL;
$arguments109['partial'] = NULL;
$arguments109['delegate'] = NULL;
$arguments109['renderable'] = NULL;
$arguments109['arguments'] = array (
);
$arguments109['optional'] = false;
$arguments109['default'] = NULL;
$arguments109['contentAs'] = NULL;
$arguments109['debug'] = true;
$arguments109['section'] = 'news-content';
// Rendering Array
$array111 = [];
$array111['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array111['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array111['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$array111['hidePagination'] = 'true';
$arguments109['arguments'] = $array111;

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '


				';
return $output108;
};
$arguments106 = [];

$output105 .= '';

$output105 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure113 = function() use ($renderingContext) {
$output114 = '';

$output114 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure116 = function() use ($renderingContext) {
$output117 = '';

$output117 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure119 = function() use ($renderingContext) {
return NULL;
};
$arguments118 = [];
$arguments118['section'] = NULL;
$arguments118['partial'] = NULL;
$arguments118['delegate'] = NULL;
$arguments118['renderable'] = NULL;
$arguments118['arguments'] = array (
);
$arguments118['optional'] = false;
$arguments118['default'] = NULL;
$arguments118['contentAs'] = NULL;
$arguments118['debug'] = true;
$arguments118['section'] = 'news-content';
// Rendering Array
$array120 = [];
$array120['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array120['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array120['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$array120['hidePagination'] = 'true';
$arguments118['arguments'] = $array120;

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '

					';
return $output117;
};
$arguments115 = [];
$arguments115['each'] = NULL;
$arguments115['as'] = NULL;
$arguments115['key'] = NULL;
$arguments115['reverse'] = false;
$arguments115['iteration'] = NULL;
$arguments115['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems');
$arguments115['as'] = 'newsItem';
$arguments115['iteration'] = 'iterator';

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure122 = function() use ($renderingContext) {
$output125 = '';

$output125 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure127 = function() use ($renderingContext) {
return NULL;
};
$arguments126 = [];
$arguments126['section'] = NULL;
$arguments126['partial'] = NULL;
$arguments126['delegate'] = NULL;
$arguments126['renderable'] = NULL;
$arguments126['arguments'] = array (
);
$arguments126['optional'] = false;
$arguments126['default'] = NULL;
$arguments126['contentAs'] = NULL;
$arguments126['debug'] = true;
$arguments126['partial'] = 'List/Pagination';
// Rendering Array
$array128 = [];
$array128['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination');
$array128['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator');
$arguments126['arguments'] = $array128;

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output125 .= '
					';
return $output125;
};
$arguments121 = [];
$arguments121['then'] = NULL;
$arguments121['else'] = NULL;
$arguments121['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array123 = [];
$array123['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow');

$expression124 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments121['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression124(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)
					),
					$renderingContext
				);
$arguments121['__thenClosure'] = $renderChildrenClosure122;

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output114 .= '
				';
return $output114;
};
$arguments112 = [];
$arguments112['if'] = NULL;

$output105 .= '';

$output105 .= '
			';
return $output105;
};
$arguments82 = [];
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$arguments82['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = [];
$array103['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination');

$expression104 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments82['__thenClosure'] = function() use ($renderingContext) {
$output84 = '';

$output84 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
return NULL;
};
$arguments85 = [];
$arguments85['section'] = NULL;
$arguments85['partial'] = NULL;
$arguments85['delegate'] = NULL;
$arguments85['renderable'] = NULL;
$arguments85['arguments'] = array (
);
$arguments85['optional'] = false;
$arguments85['default'] = NULL;
$arguments85['contentAs'] = NULL;
$arguments85['debug'] = true;
$arguments85['section'] = 'news-content';
// Rendering Array
$array87 = [];
$array87['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array87['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array87['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$array87['hidePagination'] = 'true';
$arguments85['arguments'] = $array87;

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '


				';
return $output84;
};
$arguments82['__elseClosures'][] = function() use ($renderingContext) {
$output88 = '';

$output88 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure90 = function() use ($renderingContext) {
$output91 = '';

$output91 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure93 = function() use ($renderingContext) {
return NULL;
};
$arguments92 = [];
$arguments92['section'] = NULL;
$arguments92['partial'] = NULL;
$arguments92['delegate'] = NULL;
$arguments92['renderable'] = NULL;
$arguments92['arguments'] = array (
);
$arguments92['optional'] = false;
$arguments92['default'] = NULL;
$arguments92['contentAs'] = NULL;
$arguments92['debug'] = true;
$arguments92['section'] = 'news-content';
// Rendering Array
$array94 = [];
$array94['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array94['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array94['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$array94['hidePagination'] = 'true';
$arguments92['arguments'] = $array94;

$output91 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '

					';
return $output91;
};
$arguments89 = [];
$arguments89['each'] = NULL;
$arguments89['as'] = NULL;
$arguments89['key'] = NULL;
$arguments89['reverse'] = false;
$arguments89['iteration'] = NULL;
$arguments89['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems');
$arguments89['as'] = 'newsItem';
$arguments89['iteration'] = 'iterator';

$output88 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext) {
$output99 = '';

$output99 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure101 = function() use ($renderingContext) {
return NULL;
};
$arguments100 = [];
$arguments100['section'] = NULL;
$arguments100['partial'] = NULL;
$arguments100['delegate'] = NULL;
$arguments100['renderable'] = NULL;
$arguments100['arguments'] = array (
);
$arguments100['optional'] = false;
$arguments100['default'] = NULL;
$arguments100['contentAs'] = NULL;
$arguments100['debug'] = true;
$arguments100['partial'] = 'List/Pagination';
// Rendering Array
$array102 = [];
$array102['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination');
$array102['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator');
$arguments100['arguments'] = $array102;

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
					';
return $output99;
};
$arguments95 = [];
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array97 = [];
$array97['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow');

$expression98 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$arguments95['__thenClosure'] = $renderChildrenClosure96;

$output88 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output88 .= '
				';
return $output88;
};

$output81 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure130 = function() use ($renderingContext) {
$output133 = '';

$output133 .= '
				<div class="hero-slides owl-carousel">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure135 = function() use ($renderingContext) {
$output136 = '';

$output136 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure138 = function() use ($renderingContext) {
return NULL;
};
$arguments137 = [];
$arguments137['section'] = NULL;
$arguments137['partial'] = NULL;
$arguments137['delegate'] = NULL;
$arguments137['renderable'] = NULL;
$arguments137['arguments'] = array (
);
$arguments137['optional'] = false;
$arguments137['default'] = NULL;
$arguments137['contentAs'] = NULL;
$arguments137['debug'] = true;
$arguments137['partial'] = 'List/ItemCarousel';
// Rendering Array
$array139 = [];
$array139['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array139['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array139['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments137['arguments'] = $array139;

$output136 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output136 .= '
					';
return $output136;
};
$arguments134 = [];
$arguments134['each'] = NULL;
$arguments134['as'] = NULL;
$arguments134['key'] = NULL;
$arguments134['reverse'] = false;
$arguments134['iteration'] = NULL;
$arguments134['each'] = $renderingContext->getVariableProvider()->getByPath('news');
$arguments134['as'] = 'newsItem';
$arguments134['iteration'] = 'iterator';

$output133 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
				</div>
			';
return $output133;
};
$arguments129 = [];
$arguments129['then'] = NULL;
$arguments129['else'] = NULL;
$arguments129['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array131 = [];
$array131['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout');
$array131['1'] = ' == 1 ';

$expression132 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments129['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression132(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)
					),
					$renderingContext
				);
$arguments129['__thenClosure'] = $renderChildrenClosure130;

$output81 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output81 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure141 = function() use ($renderingContext) {
$output144 = '';

$output144 .= '
				<div class="row">
					<div class="col-12">
						<div class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">
	
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure146 = function() use ($renderingContext) {
$output147 = '';

$output147 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure149 = function() use ($renderingContext) {
return NULL;
};
$arguments148 = [];
$arguments148['section'] = NULL;
$arguments148['partial'] = NULL;
$arguments148['delegate'] = NULL;
$arguments148['renderable'] = NULL;
$arguments148['arguments'] = array (
);
$arguments148['optional'] = false;
$arguments148['default'] = NULL;
$arguments148['contentAs'] = NULL;
$arguments148['debug'] = true;
$arguments148['partial'] = 'List/Temoin';
// Rendering Array
$array150 = [];
$array150['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array150['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array150['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments148['arguments'] = $array150;

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output147 .= '
					';
return $output147;
};
$arguments145 = [];
$arguments145['each'] = NULL;
$arguments145['as'] = NULL;
$arguments145['key'] = NULL;
$arguments145['reverse'] = false;
$arguments145['iteration'] = NULL;
$arguments145['each'] = $renderingContext->getVariableProvider()->getByPath('news');
$arguments145['as'] = 'newsItem';
$arguments145['iteration'] = 'iterator';

$output144 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output144 .= '
				</div>
				</div>
				</div>
			';
return $output144;
};
$arguments140 = [];
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$arguments140['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array142 = [];
$array142['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout');
$array142['1'] = ' == 3';

$expression143 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 3);};
$arguments140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$arguments140['__thenClosure'] = $renderChildrenClosure141;

$output81 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output81 .= '
		';
return $output81;
};
$arguments79 = [];

$output78 .= '';

$output78 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure152 = function() use ($renderingContext) {
$output153 = '';

$output153 .= '
			<div class="no-news-found">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure155 = function() use ($renderingContext) {
return NULL;
};
$arguments154 = [];
$arguments154['key'] = NULL;
$arguments154['id'] = NULL;
$arguments154['default'] = NULL;
$arguments154['arguments'] = NULL;
$arguments154['extensionName'] = NULL;
$arguments154['languageKey'] = NULL;
$arguments154['alternativeLanguageKeys'] = NULL;
$arguments154['key'] = 'list_nonewsfound';

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext)]);

$output153 .= '
			</div>
		';
return $output153;
};
$arguments151 = [];
$arguments151['if'] = NULL;

$output78 .= '';

$output78 .= '
	';
return $output78;
};
$arguments1 = [];
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array76 = [];
$array76['0'] = $renderingContext->getVariableProvider()->getByPath('news');

$expression77 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output27 = '';

$output27 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
$output30 = '';

$output30 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};
$arguments31 = [];
$arguments31['section'] = NULL;
$arguments31['partial'] = NULL;
$arguments31['delegate'] = NULL;
$arguments31['renderable'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['optional'] = false;
$arguments31['default'] = NULL;
$arguments31['contentAs'] = NULL;
$arguments31['debug'] = true;
$arguments31['section'] = 'news-content';
// Rendering Array
$array33 = [];
$array33['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array33['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array33['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$array33['hidePagination'] = 'true';
$arguments31['arguments'] = $array33;

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '


				';
return $output30;
};
$arguments28 = [];

$output27 .= '';

$output27 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
$output36 = '';

$output36 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
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
$arguments40['section'] = 'news-content';
// Rendering Array
$array42 = [];
$array42['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array42['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array42['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$array42['hidePagination'] = 'true';
$arguments40['arguments'] = $array42;

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '

					';
return $output39;
};
$arguments37 = [];
$arguments37['each'] = NULL;
$arguments37['as'] = NULL;
$arguments37['key'] = NULL;
$arguments37['reverse'] = false;
$arguments37['iteration'] = NULL;
$arguments37['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems');
$arguments37['as'] = 'newsItem';
$arguments37['iteration'] = 'iterator';

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
$output47 = '';

$output47 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};
$arguments48 = [];
$arguments48['section'] = NULL;
$arguments48['partial'] = NULL;
$arguments48['delegate'] = NULL;
$arguments48['renderable'] = NULL;
$arguments48['arguments'] = array (
);
$arguments48['optional'] = false;
$arguments48['default'] = NULL;
$arguments48['contentAs'] = NULL;
$arguments48['debug'] = true;
$arguments48['partial'] = 'List/Pagination';
// Rendering Array
$array50 = [];
$array50['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination');
$array50['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator');
$arguments48['arguments'] = $array50;

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

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
$array45['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow');

$expression46 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments43['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression46(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)
					),
					$renderingContext
				);
$arguments43['__thenClosure'] = $renderChildrenClosure44;

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output36 .= '
				';
return $output36;
};
$arguments34 = [];
$arguments34['if'] = NULL;

$output27 .= '';

$output27 .= '
			';
return $output27;
};
$arguments4 = [];
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array25 = [];
$array25['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination');

$expression26 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext) {
$output6 = '';

$output6 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};
$arguments7 = [];
$arguments7['section'] = NULL;
$arguments7['partial'] = NULL;
$arguments7['delegate'] = NULL;
$arguments7['renderable'] = NULL;
$arguments7['arguments'] = array (
);
$arguments7['optional'] = false;
$arguments7['default'] = NULL;
$arguments7['contentAs'] = NULL;
$arguments7['debug'] = true;
$arguments7['section'] = 'news-content';
// Rendering Array
$array9 = [];
$array9['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array9['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array9['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$array9['hidePagination'] = 'true';
$arguments7['arguments'] = $array9;

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '


				';
return $output6;
};
$arguments4['__elseClosures'][] = function() use ($renderingContext) {
$output10 = '';

$output10 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
$output13 = '';

$output13 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};
$arguments14 = [];
$arguments14['section'] = NULL;
$arguments14['partial'] = NULL;
$arguments14['delegate'] = NULL;
$arguments14['renderable'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['optional'] = false;
$arguments14['default'] = NULL;
$arguments14['contentAs'] = NULL;
$arguments14['debug'] = true;
$arguments14['section'] = 'news-content';
// Rendering Array
$array16 = [];
$array16['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array16['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array16['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$array16['hidePagination'] = 'true';
$arguments14['arguments'] = $array16;

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '

					';
return $output13;
};
$arguments11 = [];
$arguments11['each'] = NULL;
$arguments11['as'] = NULL;
$arguments11['key'] = NULL;
$arguments11['reverse'] = false;
$arguments11['iteration'] = NULL;
$arguments11['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems');
$arguments11['as'] = 'newsItem';
$arguments11['iteration'] = 'iterator';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
$output21 = '';

$output21 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};
$arguments22 = [];
$arguments22['section'] = NULL;
$arguments22['partial'] = NULL;
$arguments22['delegate'] = NULL;
$arguments22['renderable'] = NULL;
$arguments22['arguments'] = array (
);
$arguments22['optional'] = false;
$arguments22['default'] = NULL;
$arguments22['contentAs'] = NULL;
$arguments22['debug'] = true;
$arguments22['partial'] = 'List/Pagination';
// Rendering Array
$array24 = [];
$array24['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination');
$array24['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator');
$arguments22['arguments'] = $array24;

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

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
$array19['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow');

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = $renderChildrenClosure18;

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output10 .= '
				';
return $output10;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
$output55 = '';

$output55 .= '
				<div class="hero-slides owl-carousel">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
$output58 = '';

$output58 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return NULL;
};
$arguments59 = [];
$arguments59['section'] = NULL;
$arguments59['partial'] = NULL;
$arguments59['delegate'] = NULL;
$arguments59['renderable'] = NULL;
$arguments59['arguments'] = array (
);
$arguments59['optional'] = false;
$arguments59['default'] = NULL;
$arguments59['contentAs'] = NULL;
$arguments59['debug'] = true;
$arguments59['partial'] = 'List/ItemCarousel';
// Rendering Array
$array61 = [];
$array61['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array61['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array61['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments59['arguments'] = $array61;

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
					';
return $output58;
};
$arguments56 = [];
$arguments56['each'] = NULL;
$arguments56['as'] = NULL;
$arguments56['key'] = NULL;
$arguments56['reverse'] = false;
$arguments56['iteration'] = NULL;
$arguments56['each'] = $renderingContext->getVariableProvider()->getByPath('news');
$arguments56['as'] = 'newsItem';
$arguments56['iteration'] = 'iterator';

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
				</div>
			';
return $output55;
};
$arguments51 = [];
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array53 = [];
$array53['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout');
$array53['1'] = ' == 1 ';

$expression54 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = $renderChildrenClosure52;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output3 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
$output66 = '';

$output66 .= '
				<div class="row">
					<div class="col-12">
						<div class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">
	
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
$output69 = '';

$output69 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure71 = function() use ($renderingContext) {
return NULL;
};
$arguments70 = [];
$arguments70['section'] = NULL;
$arguments70['partial'] = NULL;
$arguments70['delegate'] = NULL;
$arguments70['renderable'] = NULL;
$arguments70['arguments'] = array (
);
$arguments70['optional'] = false;
$arguments70['default'] = NULL;
$arguments70['contentAs'] = NULL;
$arguments70['debug'] = true;
$arguments70['partial'] = 'List/Temoin';
// Rendering Array
$array72 = [];
$array72['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array72['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array72['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments70['arguments'] = $array72;

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '
					';
return $output69;
};
$arguments67 = [];
$arguments67['each'] = NULL;
$arguments67['as'] = NULL;
$arguments67['key'] = NULL;
$arguments67['reverse'] = false;
$arguments67['iteration'] = NULL;
$arguments67['each'] = $renderingContext->getVariableProvider()->getByPath('news');
$arguments67['as'] = 'newsItem';
$arguments67['iteration'] = 'iterator';

$output66 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
				</div>
				</div>
				</div>
			';
return $output66;
};
$arguments62 = [];
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = [];
$array64['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout');
$array64['1'] = ' == 3';

$expression65 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 3);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression65(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$arguments62['__thenClosure'] = $renderChildrenClosure63;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output3 .= '
		';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext) {
$output73 = '';

$output73 .= '
			<div class="no-news-found">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure75 = function() use ($renderingContext) {
return NULL;
};
$arguments74 = [];
$arguments74['key'] = NULL;
$arguments74['id'] = NULL;
$arguments74['default'] = NULL;
$arguments74['arguments'] = NULL;
$arguments74['extensionName'] = NULL;
$arguments74['languageKey'] = NULL;
$arguments74['alternativeLanguageKeys'] = NULL;
$arguments74['key'] = 'list_nonewsfound';

$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext)]);

$output73 .= '
			</div>
		';
return $output73;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	<!--TYPO3SEARCH_begin-->
';

return $output0;
}
/**
 * section news-content
 */
public function section_73fe4862bd6ccd00b616b50ec4ec0b7a859d4a56(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output156 = '';

$output156 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure158 = function() use ($renderingContext) {
$output165 = '';

$output165 .= '		
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure167 = function() use ($renderingContext) {
$output168 = '';

$output168 .= '	
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure170 = function() use ($renderingContext) {
return NULL;
};
$arguments169 = [];
$arguments169['section'] = NULL;
$arguments169['partial'] = NULL;
$arguments169['delegate'] = NULL;
$arguments169['renderable'] = NULL;
$arguments169['arguments'] = array (
);
$arguments169['optional'] = false;
$arguments169['default'] = NULL;
$arguments169['contentAs'] = NULL;
$arguments169['debug'] = true;
$arguments169['partial'] = 'List/Immeuble';
// Rendering Array
$array171 = [];
$array171['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array171['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array171['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments169['arguments'] = $array171;

$output168 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '
		';
return $output168;
};
$arguments166 = [];

$output165 .= '';

$output165 .= '		
	';
return $output165;
};
$arguments157 = [];
$arguments157['then'] = NULL;
$arguments157['else'] = NULL;
$arguments157['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array163 = [];
$array163['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout');
$array163['1'] = ' == 7';

$expression164 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 7);};
$arguments157['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression164(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array163)
					),
					$renderingContext
				);
$arguments157['__thenClosure'] = function() use ($renderingContext) {
$output159 = '';

$output159 .= '	
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure161 = function() use ($renderingContext) {
return NULL;
};
$arguments160 = [];
$arguments160['section'] = NULL;
$arguments160['partial'] = NULL;
$arguments160['delegate'] = NULL;
$arguments160['renderable'] = NULL;
$arguments160['arguments'] = array (
);
$arguments160['optional'] = false;
$arguments160['default'] = NULL;
$arguments160['contentAs'] = NULL;
$arguments160['debug'] = true;
$arguments160['partial'] = 'List/Immeuble';
// Rendering Array
$array162 = [];
$array162['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array162['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array162['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments160['arguments'] = $array162;

$output159 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output159 .= '
		';
return $output159;
};

$output156 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output156 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure173 = function() use ($renderingContext) {
$output180 = '';

$output180 .= '		
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure182 = function() use ($renderingContext) {
$output183 = '';

$output183 .= '	
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure185 = function() use ($renderingContext) {
return NULL;
};
$arguments184 = [];
$arguments184['section'] = NULL;
$arguments184['partial'] = NULL;
$arguments184['delegate'] = NULL;
$arguments184['renderable'] = NULL;
$arguments184['arguments'] = array (
);
$arguments184['optional'] = false;
$arguments184['default'] = NULL;
$arguments184['contentAs'] = NULL;
$arguments184['debug'] = true;
$arguments184['partial'] = 'List/Blog';
// Rendering Array
$array186 = [];
$array186['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array186['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array186['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments184['arguments'] = $array186;

$output183 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output183 .= '
		';
return $output183;
};
$arguments181 = [];

$output180 .= '';

$output180 .= '		
	';
return $output180;
};
$arguments172 = [];
$arguments172['then'] = NULL;
$arguments172['else'] = NULL;
$arguments172['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array178 = [];
$array178['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout');
$array178['1'] = ' == 5';

$expression179 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 5);};
$arguments172['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression179(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);
$arguments172['__thenClosure'] = function() use ($renderingContext) {
$output174 = '';

$output174 .= '	
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure176 = function() use ($renderingContext) {
return NULL;
};
$arguments175 = [];
$arguments175['section'] = NULL;
$arguments175['partial'] = NULL;
$arguments175['delegate'] = NULL;
$arguments175['renderable'] = NULL;
$arguments175['arguments'] = array (
);
$arguments175['optional'] = false;
$arguments175['default'] = NULL;
$arguments175['contentAs'] = NULL;
$arguments175['debug'] = true;
$arguments175['partial'] = 'List/Blog';
// Rendering Array
$array177 = [];
$array177['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array177['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array177['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments175['arguments'] = $array177;

$output174 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output174 .= '
		';
return $output174;
};

$output156 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output156 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure188 = function() use ($renderingContext) {
$output195 = '';

$output195 .= '		
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure197 = function() use ($renderingContext) {
$output198 = '';

$output198 .= '	
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure200 = function() use ($renderingContext) {
return NULL;
};
$arguments199 = [];
$arguments199['section'] = NULL;
$arguments199['partial'] = NULL;
$arguments199['delegate'] = NULL;
$arguments199['renderable'] = NULL;
$arguments199['arguments'] = array (
);
$arguments199['optional'] = false;
$arguments199['default'] = NULL;
$arguments199['contentAs'] = NULL;
$arguments199['debug'] = true;
$arguments199['partial'] = 'List/Immeuble';
// Rendering Array
$array201 = [];
$array201['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array201['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array201['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments199['arguments'] = $array201;

$output198 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output198 .= '
		';
return $output198;
};
$arguments196 = [];

$output195 .= '';

$output195 .= '		
	';
return $output195;
};
$arguments187 = [];
$arguments187['then'] = NULL;
$arguments187['else'] = NULL;
$arguments187['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array193 = [];
$array193['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout');
$array193['1'] = ' == 6';

$expression194 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 6);};
$arguments187['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression194(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array193)
					),
					$renderingContext
				);
$arguments187['__thenClosure'] = function() use ($renderingContext) {
$output189 = '';

$output189 .= '	
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure191 = function() use ($renderingContext) {
return NULL;
};
$arguments190 = [];
$arguments190['section'] = NULL;
$arguments190['partial'] = NULL;
$arguments190['delegate'] = NULL;
$arguments190['renderable'] = NULL;
$arguments190['arguments'] = array (
);
$arguments190['optional'] = false;
$arguments190['default'] = NULL;
$arguments190['contentAs'] = NULL;
$arguments190['debug'] = true;
$arguments190['partial'] = 'List/Immeuble';
// Rendering Array
$array192 = [];
$array192['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array192['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array192['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments190['arguments'] = $array192;

$output189 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output189 .= '
		';
return $output189;
};

$output156 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output156 .= '
';

return $output156;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output202 = '';

$output202 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure204 = function() use ($renderingContext) {
return NULL;
};
$arguments203 = [];
$arguments203['name'] = NULL;
$arguments203['name'] = 'General';

$output202 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, ['']);

$output202 .= '
<!--
	=====================
		Templates/News/List.html
-->

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure206 = function() use ($renderingContext) {
$output207 = '';

$output207 .= '
	<!--TYPO3SEARCH_end-->
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure209 = function() use ($renderingContext) {
$output285 = '';

$output285 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure287 = function() use ($renderingContext) {
$output288 = '';

$output288 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure290 = function() use ($renderingContext) {
$output312 = '';

$output312 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure314 = function() use ($renderingContext) {
$output315 = '';

$output315 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure317 = function() use ($renderingContext) {
return NULL;
};
$arguments316 = [];
$arguments316['section'] = NULL;
$arguments316['partial'] = NULL;
$arguments316['delegate'] = NULL;
$arguments316['renderable'] = NULL;
$arguments316['arguments'] = array (
);
$arguments316['optional'] = false;
$arguments316['default'] = NULL;
$arguments316['contentAs'] = NULL;
$arguments316['debug'] = true;
$arguments316['section'] = 'news-content';
// Rendering Array
$array318 = [];
$array318['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array318['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array318['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$array318['hidePagination'] = 'true';
$arguments316['arguments'] = $array318;

$output315 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output315 .= '


				';
return $output315;
};
$arguments313 = [];

$output312 .= '';

$output312 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure320 = function() use ($renderingContext) {
$output321 = '';

$output321 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure323 = function() use ($renderingContext) {
$output324 = '';

$output324 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure326 = function() use ($renderingContext) {
return NULL;
};
$arguments325 = [];
$arguments325['section'] = NULL;
$arguments325['partial'] = NULL;
$arguments325['delegate'] = NULL;
$arguments325['renderable'] = NULL;
$arguments325['arguments'] = array (
);
$arguments325['optional'] = false;
$arguments325['default'] = NULL;
$arguments325['contentAs'] = NULL;
$arguments325['debug'] = true;
$arguments325['section'] = 'news-content';
// Rendering Array
$array327 = [];
$array327['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array327['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array327['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$array327['hidePagination'] = 'true';
$arguments325['arguments'] = $array327;

$output324 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output324 .= '

					';
return $output324;
};
$arguments322 = [];
$arguments322['each'] = NULL;
$arguments322['as'] = NULL;
$arguments322['key'] = NULL;
$arguments322['reverse'] = false;
$arguments322['iteration'] = NULL;
$arguments322['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems');
$arguments322['as'] = 'newsItem';
$arguments322['iteration'] = 'iterator';

$output321 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext);

$output321 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure329 = function() use ($renderingContext) {
$output332 = '';

$output332 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure334 = function() use ($renderingContext) {
return NULL;
};
$arguments333 = [];
$arguments333['section'] = NULL;
$arguments333['partial'] = NULL;
$arguments333['delegate'] = NULL;
$arguments333['renderable'] = NULL;
$arguments333['arguments'] = array (
);
$arguments333['optional'] = false;
$arguments333['default'] = NULL;
$arguments333['contentAs'] = NULL;
$arguments333['debug'] = true;
$arguments333['partial'] = 'List/Pagination';
// Rendering Array
$array335 = [];
$array335['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination');
$array335['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator');
$arguments333['arguments'] = $array335;

$output332 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output332 .= '
					';
return $output332;
};
$arguments328 = [];
$arguments328['then'] = NULL;
$arguments328['else'] = NULL;
$arguments328['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array330 = [];
$array330['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow');

$expression331 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments328['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression331(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array330)
					),
					$renderingContext
				);
$arguments328['__thenClosure'] = $renderChildrenClosure329;

$output321 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output321 .= '
				';
return $output321;
};
$arguments319 = [];
$arguments319['if'] = NULL;

$output312 .= '';

$output312 .= '
			';
return $output312;
};
$arguments289 = [];
$arguments289['then'] = NULL;
$arguments289['else'] = NULL;
$arguments289['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array310 = [];
$array310['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination');

$expression311 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments289['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression311(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array310)
					),
					$renderingContext
				);
$arguments289['__thenClosure'] = function() use ($renderingContext) {
$output291 = '';

$output291 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure293 = function() use ($renderingContext) {
return NULL;
};
$arguments292 = [];
$arguments292['section'] = NULL;
$arguments292['partial'] = NULL;
$arguments292['delegate'] = NULL;
$arguments292['renderable'] = NULL;
$arguments292['arguments'] = array (
);
$arguments292['optional'] = false;
$arguments292['default'] = NULL;
$arguments292['contentAs'] = NULL;
$arguments292['debug'] = true;
$arguments292['section'] = 'news-content';
// Rendering Array
$array294 = [];
$array294['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array294['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array294['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$array294['hidePagination'] = 'true';
$arguments292['arguments'] = $array294;

$output291 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output291 .= '


				';
return $output291;
};
$arguments289['__elseClosures'][] = function() use ($renderingContext) {
$output295 = '';

$output295 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure297 = function() use ($renderingContext) {
$output298 = '';

$output298 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure300 = function() use ($renderingContext) {
return NULL;
};
$arguments299 = [];
$arguments299['section'] = NULL;
$arguments299['partial'] = NULL;
$arguments299['delegate'] = NULL;
$arguments299['renderable'] = NULL;
$arguments299['arguments'] = array (
);
$arguments299['optional'] = false;
$arguments299['default'] = NULL;
$arguments299['contentAs'] = NULL;
$arguments299['debug'] = true;
$arguments299['section'] = 'news-content';
// Rendering Array
$array301 = [];
$array301['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array301['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array301['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$array301['hidePagination'] = 'true';
$arguments299['arguments'] = $array301;

$output298 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output298 .= '

					';
return $output298;
};
$arguments296 = [];
$arguments296['each'] = NULL;
$arguments296['as'] = NULL;
$arguments296['key'] = NULL;
$arguments296['reverse'] = false;
$arguments296['iteration'] = NULL;
$arguments296['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems');
$arguments296['as'] = 'newsItem';
$arguments296['iteration'] = 'iterator';

$output295 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output295 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure303 = function() use ($renderingContext) {
$output306 = '';

$output306 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure308 = function() use ($renderingContext) {
return NULL;
};
$arguments307 = [];
$arguments307['section'] = NULL;
$arguments307['partial'] = NULL;
$arguments307['delegate'] = NULL;
$arguments307['renderable'] = NULL;
$arguments307['arguments'] = array (
);
$arguments307['optional'] = false;
$arguments307['default'] = NULL;
$arguments307['contentAs'] = NULL;
$arguments307['debug'] = true;
$arguments307['partial'] = 'List/Pagination';
// Rendering Array
$array309 = [];
$array309['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination');
$array309['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator');
$arguments307['arguments'] = $array309;

$output306 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output306 .= '
					';
return $output306;
};
$arguments302 = [];
$arguments302['then'] = NULL;
$arguments302['else'] = NULL;
$arguments302['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array304 = [];
$array304['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow');

$expression305 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments302['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression305(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array304)
					),
					$renderingContext
				);
$arguments302['__thenClosure'] = $renderChildrenClosure303;

$output295 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output295 .= '
				';
return $output295;
};

$output288 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);

$output288 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure337 = function() use ($renderingContext) {
$output340 = '';

$output340 .= '
				<div class="hero-slides owl-carousel">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure342 = function() use ($renderingContext) {
$output343 = '';

$output343 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure345 = function() use ($renderingContext) {
return NULL;
};
$arguments344 = [];
$arguments344['section'] = NULL;
$arguments344['partial'] = NULL;
$arguments344['delegate'] = NULL;
$arguments344['renderable'] = NULL;
$arguments344['arguments'] = array (
);
$arguments344['optional'] = false;
$arguments344['default'] = NULL;
$arguments344['contentAs'] = NULL;
$arguments344['debug'] = true;
$arguments344['partial'] = 'List/ItemCarousel';
// Rendering Array
$array346 = [];
$array346['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array346['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array346['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments344['arguments'] = $array346;

$output343 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext);

$output343 .= '
					';
return $output343;
};
$arguments341 = [];
$arguments341['each'] = NULL;
$arguments341['as'] = NULL;
$arguments341['key'] = NULL;
$arguments341['reverse'] = false;
$arguments341['iteration'] = NULL;
$arguments341['each'] = $renderingContext->getVariableProvider()->getByPath('news');
$arguments341['as'] = 'newsItem';
$arguments341['iteration'] = 'iterator';

$output340 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output340 .= '
				</div>
			';
return $output340;
};
$arguments336 = [];
$arguments336['then'] = NULL;
$arguments336['else'] = NULL;
$arguments336['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array338 = [];
$array338['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout');
$array338['1'] = ' == 1 ';

$expression339 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments336['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression339(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array338)
					),
					$renderingContext
				);
$arguments336['__thenClosure'] = $renderChildrenClosure337;

$output288 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments336, $renderChildrenClosure337, $renderingContext);

$output288 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure348 = function() use ($renderingContext) {
$output351 = '';

$output351 .= '
				<div class="row">
					<div class="col-12">
						<div class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">
	
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure353 = function() use ($renderingContext) {
$output354 = '';

$output354 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure356 = function() use ($renderingContext) {
return NULL;
};
$arguments355 = [];
$arguments355['section'] = NULL;
$arguments355['partial'] = NULL;
$arguments355['delegate'] = NULL;
$arguments355['renderable'] = NULL;
$arguments355['arguments'] = array (
);
$arguments355['optional'] = false;
$arguments355['default'] = NULL;
$arguments355['contentAs'] = NULL;
$arguments355['debug'] = true;
$arguments355['partial'] = 'List/Temoin';
// Rendering Array
$array357 = [];
$array357['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array357['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array357['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments355['arguments'] = $array357;

$output354 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);

$output354 .= '
					';
return $output354;
};
$arguments352 = [];
$arguments352['each'] = NULL;
$arguments352['as'] = NULL;
$arguments352['key'] = NULL;
$arguments352['reverse'] = false;
$arguments352['iteration'] = NULL;
$arguments352['each'] = $renderingContext->getVariableProvider()->getByPath('news');
$arguments352['as'] = 'newsItem';
$arguments352['iteration'] = 'iterator';

$output351 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext);

$output351 .= '
				</div>
				</div>
				</div>
			';
return $output351;
};
$arguments347 = [];
$arguments347['then'] = NULL;
$arguments347['else'] = NULL;
$arguments347['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array349 = [];
$array349['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout');
$array349['1'] = ' == 3';

$expression350 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 3);};
$arguments347['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression350(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array349)
					),
					$renderingContext
				);
$arguments347['__thenClosure'] = $renderChildrenClosure348;

$output288 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);

$output288 .= '
		';
return $output288;
};
$arguments286 = [];

$output285 .= '';

$output285 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure359 = function() use ($renderingContext) {
$output360 = '';

$output360 .= '
			<div class="no-news-found">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure362 = function() use ($renderingContext) {
return NULL;
};
$arguments361 = [];
$arguments361['key'] = NULL;
$arguments361['id'] = NULL;
$arguments361['default'] = NULL;
$arguments361['arguments'] = NULL;
$arguments361['extensionName'] = NULL;
$arguments361['languageKey'] = NULL;
$arguments361['alternativeLanguageKeys'] = NULL;
$arguments361['key'] = 'list_nonewsfound';

$output360 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext)]);

$output360 .= '
			</div>
		';
return $output360;
};
$arguments358 = [];
$arguments358['if'] = NULL;

$output285 .= '';

$output285 .= '
	';
return $output285;
};
$arguments208 = [];
$arguments208['then'] = NULL;
$arguments208['else'] = NULL;
$arguments208['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array283 = [];
$array283['0'] = $renderingContext->getVariableProvider()->getByPath('news');

$expression284 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments208['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression284(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array283)
					),
					$renderingContext
				);
$arguments208['__thenClosure'] = function() use ($renderingContext) {
$output210 = '';

$output210 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure212 = function() use ($renderingContext) {
$output234 = '';

$output234 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure236 = function() use ($renderingContext) {
$output237 = '';

$output237 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure239 = function() use ($renderingContext) {
return NULL;
};
$arguments238 = [];
$arguments238['section'] = NULL;
$arguments238['partial'] = NULL;
$arguments238['delegate'] = NULL;
$arguments238['renderable'] = NULL;
$arguments238['arguments'] = array (
);
$arguments238['optional'] = false;
$arguments238['default'] = NULL;
$arguments238['contentAs'] = NULL;
$arguments238['debug'] = true;
$arguments238['section'] = 'news-content';
// Rendering Array
$array240 = [];
$array240['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array240['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array240['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$array240['hidePagination'] = 'true';
$arguments238['arguments'] = $array240;

$output237 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output237 .= '


				';
return $output237;
};
$arguments235 = [];

$output234 .= '';

$output234 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure242 = function() use ($renderingContext) {
$output243 = '';

$output243 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure245 = function() use ($renderingContext) {
$output246 = '';

$output246 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure248 = function() use ($renderingContext) {
return NULL;
};
$arguments247 = [];
$arguments247['section'] = NULL;
$arguments247['partial'] = NULL;
$arguments247['delegate'] = NULL;
$arguments247['renderable'] = NULL;
$arguments247['arguments'] = array (
);
$arguments247['optional'] = false;
$arguments247['default'] = NULL;
$arguments247['contentAs'] = NULL;
$arguments247['debug'] = true;
$arguments247['section'] = 'news-content';
// Rendering Array
$array249 = [];
$array249['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array249['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array249['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$array249['hidePagination'] = 'true';
$arguments247['arguments'] = $array249;

$output246 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output246 .= '

					';
return $output246;
};
$arguments244 = [];
$arguments244['each'] = NULL;
$arguments244['as'] = NULL;
$arguments244['key'] = NULL;
$arguments244['reverse'] = false;
$arguments244['iteration'] = NULL;
$arguments244['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems');
$arguments244['as'] = 'newsItem';
$arguments244['iteration'] = 'iterator';

$output243 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output243 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure251 = function() use ($renderingContext) {
$output254 = '';

$output254 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure256 = function() use ($renderingContext) {
return NULL;
};
$arguments255 = [];
$arguments255['section'] = NULL;
$arguments255['partial'] = NULL;
$arguments255['delegate'] = NULL;
$arguments255['renderable'] = NULL;
$arguments255['arguments'] = array (
);
$arguments255['optional'] = false;
$arguments255['default'] = NULL;
$arguments255['contentAs'] = NULL;
$arguments255['debug'] = true;
$arguments255['partial'] = 'List/Pagination';
// Rendering Array
$array257 = [];
$array257['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination');
$array257['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator');
$arguments255['arguments'] = $array257;

$output254 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output254 .= '
					';
return $output254;
};
$arguments250 = [];
$arguments250['then'] = NULL;
$arguments250['else'] = NULL;
$arguments250['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array252 = [];
$array252['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow');

$expression253 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments250['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression253(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array252)
					),
					$renderingContext
				);
$arguments250['__thenClosure'] = $renderChildrenClosure251;

$output243 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output243 .= '
				';
return $output243;
};
$arguments241 = [];
$arguments241['if'] = NULL;

$output234 .= '';

$output234 .= '
			';
return $output234;
};
$arguments211 = [];
$arguments211['then'] = NULL;
$arguments211['else'] = NULL;
$arguments211['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array232 = [];
$array232['0'] = $renderingContext->getVariableProvider()->getByPath('settings.hidePagination');

$expression233 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments211['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression233(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array232)
					),
					$renderingContext
				);
$arguments211['__thenClosure'] = function() use ($renderingContext) {
$output213 = '';

$output213 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure215 = function() use ($renderingContext) {
return NULL;
};
$arguments214 = [];
$arguments214['section'] = NULL;
$arguments214['partial'] = NULL;
$arguments214['delegate'] = NULL;
$arguments214['renderable'] = NULL;
$arguments214['arguments'] = array (
);
$arguments214['optional'] = false;
$arguments214['default'] = NULL;
$arguments214['contentAs'] = NULL;
$arguments214['debug'] = true;
$arguments214['section'] = 'news-content';
// Rendering Array
$array216 = [];
$array216['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array216['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array216['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$array216['hidePagination'] = 'true';
$arguments214['arguments'] = $array216;

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output213 .= '


				';
return $output213;
};
$arguments211['__elseClosures'][] = function() use ($renderingContext) {
$output217 = '';

$output217 .= '

					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure219 = function() use ($renderingContext) {
$output220 = '';

$output220 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure222 = function() use ($renderingContext) {
return NULL;
};
$arguments221 = [];
$arguments221['section'] = NULL;
$arguments221['partial'] = NULL;
$arguments221['delegate'] = NULL;
$arguments221['renderable'] = NULL;
$arguments221['arguments'] = array (
);
$arguments221['optional'] = false;
$arguments221['default'] = NULL;
$arguments221['contentAs'] = NULL;
$arguments221['debug'] = true;
$arguments221['section'] = 'news-content';
// Rendering Array
$array223 = [];
$array223['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array223['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array223['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$array223['hidePagination'] = 'true';
$arguments221['arguments'] = $array223;

$output220 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output220 .= '

					';
return $output220;
};
$arguments218 = [];
$arguments218['each'] = NULL;
$arguments218['as'] = NULL;
$arguments218['key'] = NULL;
$arguments218['reverse'] = false;
$arguments218['iteration'] = NULL;
$arguments218['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator.paginatedItems');
$arguments218['as'] = 'newsItem';
$arguments218['iteration'] = 'iterator';

$output217 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output217 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure225 = function() use ($renderingContext) {
$output228 = '';

$output228 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure230 = function() use ($renderingContext) {
return NULL;
};
$arguments229 = [];
$arguments229['section'] = NULL;
$arguments229['partial'] = NULL;
$arguments229['delegate'] = NULL;
$arguments229['renderable'] = NULL;
$arguments229['arguments'] = array (
);
$arguments229['optional'] = false;
$arguments229['default'] = NULL;
$arguments229['contentAs'] = NULL;
$arguments229['debug'] = true;
$arguments229['partial'] = 'List/Pagination';
// Rendering Array
$array231 = [];
$array231['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination.pagination');
$array231['paginator'] = $renderingContext->getVariableProvider()->getByPath('pagination.paginator');
$arguments229['arguments'] = $array231;

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output228 .= '
					';
return $output228;
};
$arguments224 = [];
$arguments224['then'] = NULL;
$arguments224['else'] = NULL;
$arguments224['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array226 = [];
$array226['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.insertBelow');

$expression227 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments224['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression227(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array226)
					),
					$renderingContext
				);
$arguments224['__thenClosure'] = $renderChildrenClosure225;

$output217 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output217 .= '
				';
return $output217;
};

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output210 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure259 = function() use ($renderingContext) {
$output262 = '';

$output262 .= '
				<div class="hero-slides owl-carousel">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure264 = function() use ($renderingContext) {
$output265 = '';

$output265 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure267 = function() use ($renderingContext) {
return NULL;
};
$arguments266 = [];
$arguments266['section'] = NULL;
$arguments266['partial'] = NULL;
$arguments266['delegate'] = NULL;
$arguments266['renderable'] = NULL;
$arguments266['arguments'] = array (
);
$arguments266['optional'] = false;
$arguments266['default'] = NULL;
$arguments266['contentAs'] = NULL;
$arguments266['debug'] = true;
$arguments266['partial'] = 'List/ItemCarousel';
// Rendering Array
$array268 = [];
$array268['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array268['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array268['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments266['arguments'] = $array268;

$output265 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output265 .= '
					';
return $output265;
};
$arguments263 = [];
$arguments263['each'] = NULL;
$arguments263['as'] = NULL;
$arguments263['key'] = NULL;
$arguments263['reverse'] = false;
$arguments263['iteration'] = NULL;
$arguments263['each'] = $renderingContext->getVariableProvider()->getByPath('news');
$arguments263['as'] = 'newsItem';
$arguments263['iteration'] = 'iterator';

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output262 .= '
				</div>
			';
return $output262;
};
$arguments258 = [];
$arguments258['then'] = NULL;
$arguments258['else'] = NULL;
$arguments258['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array260 = [];
$array260['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout');
$array260['1'] = ' == 1 ';

$expression261 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments258['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression261(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array260)
					),
					$renderingContext
				);
$arguments258['__thenClosure'] = $renderChildrenClosure259;

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output210 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure270 = function() use ($renderingContext) {
$output273 = '';

$output273 .= '
				<div class="row">
					<div class="col-12">
						<div class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">
	
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure275 = function() use ($renderingContext) {
$output276 = '';

$output276 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure278 = function() use ($renderingContext) {
return NULL;
};
$arguments277 = [];
$arguments277['section'] = NULL;
$arguments277['partial'] = NULL;
$arguments277['delegate'] = NULL;
$arguments277['renderable'] = NULL;
$arguments277['arguments'] = array (
);
$arguments277['optional'] = false;
$arguments277['default'] = NULL;
$arguments277['contentAs'] = NULL;
$arguments277['debug'] = true;
$arguments277['partial'] = 'List/Temoin';
// Rendering Array
$array279 = [];
$array279['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array279['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array279['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments277['arguments'] = $array279;

$output276 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);

$output276 .= '
					';
return $output276;
};
$arguments274 = [];
$arguments274['each'] = NULL;
$arguments274['as'] = NULL;
$arguments274['key'] = NULL;
$arguments274['reverse'] = false;
$arguments274['iteration'] = NULL;
$arguments274['each'] = $renderingContext->getVariableProvider()->getByPath('news');
$arguments274['as'] = 'newsItem';
$arguments274['iteration'] = 'iterator';

$output273 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output273 .= '
				</div>
				</div>
				</div>
			';
return $output273;
};
$arguments269 = [];
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$arguments269['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array271 = [];
$array271['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout');
$array271['1'] = ' == 3';

$expression272 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 3);};
$arguments269['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression272(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array271)
					),
					$renderingContext
				);
$arguments269['__thenClosure'] = $renderChildrenClosure270;

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output210 .= '
		';
return $output210;
};
$arguments208['__elseClosures'][] = function() use ($renderingContext) {
$output280 = '';

$output280 .= '
			<div class="no-news-found">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure282 = function() use ($renderingContext) {
return NULL;
};
$arguments281 = [];
$arguments281['key'] = NULL;
$arguments281['id'] = NULL;
$arguments281['default'] = NULL;
$arguments281['arguments'] = NULL;
$arguments281['extensionName'] = NULL;
$arguments281['languageKey'] = NULL;
$arguments281['alternativeLanguageKeys'] = NULL;
$arguments281['key'] = 'list_nonewsfound';

$output280 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext)]);

$output280 .= '
			</div>
		';
return $output280;
};

$output207 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output207 .= '
	<!--TYPO3SEARCH_begin-->
';
return $output207;
};
$arguments205 = [];
$arguments205['name'] = NULL;
$arguments205['name'] = 'content';

$output202 .= '';

$output202 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure364 = function() use ($renderingContext) {
$output365 = '';

$output365 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure367 = function() use ($renderingContext) {
$output374 = '';

$output374 .= '		
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure376 = function() use ($renderingContext) {
$output377 = '';

$output377 .= '	
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure379 = function() use ($renderingContext) {
return NULL;
};
$arguments378 = [];
$arguments378['section'] = NULL;
$arguments378['partial'] = NULL;
$arguments378['delegate'] = NULL;
$arguments378['renderable'] = NULL;
$arguments378['arguments'] = array (
);
$arguments378['optional'] = false;
$arguments378['default'] = NULL;
$arguments378['contentAs'] = NULL;
$arguments378['debug'] = true;
$arguments378['partial'] = 'List/Immeuble';
// Rendering Array
$array380 = [];
$array380['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array380['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array380['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments378['arguments'] = $array380;

$output377 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext);

$output377 .= '
		';
return $output377;
};
$arguments375 = [];

$output374 .= '';

$output374 .= '		
	';
return $output374;
};
$arguments366 = [];
$arguments366['then'] = NULL;
$arguments366['else'] = NULL;
$arguments366['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array372 = [];
$array372['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout');
$array372['1'] = ' == 7';

$expression373 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 7);};
$arguments366['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression373(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array372)
					),
					$renderingContext
				);
$arguments366['__thenClosure'] = function() use ($renderingContext) {
$output368 = '';

$output368 .= '	
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure370 = function() use ($renderingContext) {
return NULL;
};
$arguments369 = [];
$arguments369['section'] = NULL;
$arguments369['partial'] = NULL;
$arguments369['delegate'] = NULL;
$arguments369['renderable'] = NULL;
$arguments369['arguments'] = array (
);
$arguments369['optional'] = false;
$arguments369['default'] = NULL;
$arguments369['contentAs'] = NULL;
$arguments369['debug'] = true;
$arguments369['partial'] = 'List/Immeuble';
// Rendering Array
$array371 = [];
$array371['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array371['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array371['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments369['arguments'] = $array371;

$output368 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);

$output368 .= '
		';
return $output368;
};

$output365 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output365 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure382 = function() use ($renderingContext) {
$output389 = '';

$output389 .= '		
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure391 = function() use ($renderingContext) {
$output392 = '';

$output392 .= '	
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure394 = function() use ($renderingContext) {
return NULL;
};
$arguments393 = [];
$arguments393['section'] = NULL;
$arguments393['partial'] = NULL;
$arguments393['delegate'] = NULL;
$arguments393['renderable'] = NULL;
$arguments393['arguments'] = array (
);
$arguments393['optional'] = false;
$arguments393['default'] = NULL;
$arguments393['contentAs'] = NULL;
$arguments393['debug'] = true;
$arguments393['partial'] = 'List/Blog';
// Rendering Array
$array395 = [];
$array395['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array395['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array395['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments393['arguments'] = $array395;

$output392 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext);

$output392 .= '
		';
return $output392;
};
$arguments390 = [];

$output389 .= '';

$output389 .= '		
	';
return $output389;
};
$arguments381 = [];
$arguments381['then'] = NULL;
$arguments381['else'] = NULL;
$arguments381['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array387 = [];
$array387['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout');
$array387['1'] = ' == 5';

$expression388 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 5);};
$arguments381['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression388(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array387)
					),
					$renderingContext
				);
$arguments381['__thenClosure'] = function() use ($renderingContext) {
$output383 = '';

$output383 .= '	
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure385 = function() use ($renderingContext) {
return NULL;
};
$arguments384 = [];
$arguments384['section'] = NULL;
$arguments384['partial'] = NULL;
$arguments384['delegate'] = NULL;
$arguments384['renderable'] = NULL;
$arguments384['arguments'] = array (
);
$arguments384['optional'] = false;
$arguments384['default'] = NULL;
$arguments384['contentAs'] = NULL;
$arguments384['debug'] = true;
$arguments384['partial'] = 'List/Blog';
// Rendering Array
$array386 = [];
$array386['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array386['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array386['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments384['arguments'] = $array386;

$output383 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);

$output383 .= '
		';
return $output383;
};

$output365 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments381, $renderChildrenClosure382, $renderingContext);

$output365 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure397 = function() use ($renderingContext) {
$output404 = '';

$output404 .= '		
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure406 = function() use ($renderingContext) {
$output407 = '';

$output407 .= '	
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure409 = function() use ($renderingContext) {
return NULL;
};
$arguments408 = [];
$arguments408['section'] = NULL;
$arguments408['partial'] = NULL;
$arguments408['delegate'] = NULL;
$arguments408['renderable'] = NULL;
$arguments408['arguments'] = array (
);
$arguments408['optional'] = false;
$arguments408['default'] = NULL;
$arguments408['contentAs'] = NULL;
$arguments408['debug'] = true;
$arguments408['partial'] = 'List/Immeuble';
// Rendering Array
$array410 = [];
$array410['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array410['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array410['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments408['arguments'] = $array410;

$output407 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output407 .= '
		';
return $output407;
};
$arguments405 = [];

$output404 .= '';

$output404 .= '		
	';
return $output404;
};
$arguments396 = [];
$arguments396['then'] = NULL;
$arguments396['else'] = NULL;
$arguments396['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array402 = [];
$array402['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout');
$array402['1'] = ' == 6';

$expression403 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 6);};
$arguments396['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression403(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array402)
					),
					$renderingContext
				);
$arguments396['__thenClosure'] = function() use ($renderingContext) {
$output398 = '';

$output398 .= '	
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure400 = function() use ($renderingContext) {
return NULL;
};
$arguments399 = [];
$arguments399['section'] = NULL;
$arguments399['partial'] = NULL;
$arguments399['delegate'] = NULL;
$arguments399['renderable'] = NULL;
$arguments399['arguments'] = array (
);
$arguments399['optional'] = false;
$arguments399['default'] = NULL;
$arguments399['contentAs'] = NULL;
$arguments399['debug'] = true;
$arguments399['partial'] = 'List/Immeuble';
// Rendering Array
$array401 = [];
$array401['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array401['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array401['iterator'] = $renderingContext->getVariableProvider()->getByPath('iterator');
$arguments399['arguments'] = $array401;

$output398 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext);

$output398 .= '
		';
return $output398;
};

$output365 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output365 .= '
';
return $output365;
};
$arguments363 = [];
$arguments363['name'] = NULL;
$arguments363['name'] = 'news-content';

$output202 .= '';

$output202 .= '

';

return $output202;
}


}
#