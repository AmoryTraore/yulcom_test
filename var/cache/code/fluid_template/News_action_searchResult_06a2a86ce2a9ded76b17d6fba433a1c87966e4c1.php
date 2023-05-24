<?php

class News_action_searchResult_06a2a86ce2a9ded76b17d6fba433a1c87966e4c1 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output0 = '';

$output0 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output5 = '';

$output5 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
$output25 = '';

$output25 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
$output28 = '';

$output28 .= '
					<div class="count-msg">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return NULL;
};
$arguments29 = [];
$arguments29['key'] = NULL;
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['languageKey'] = NULL;
$arguments29['alternativeLanguageKeys'] = NULL;
$arguments29['key'] = 'search-text';
// Rendering Array
$array31 = [];
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};
$arguments32 = [];
$arguments32['subject'] = NULL;
$arguments32['subject'] = $renderingContext->getVariableProvider()->getByPath('news');
$renderChildrenClosure33 = ($arguments32['subject'] !== null) ? function() use ($arguments32) { return $arguments32['subject']; } : $renderChildrenClosure33;$array31['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);
$array31['1'] = $renderingContext->getVariableProvider()->getByPath('search.subject');
$arguments29['arguments'] = $array31;

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output28 .= '
					</div>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
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
$arguments37['partial'] = 'List/Blog';
// Rendering Array
$array39 = [];
$array39['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array39['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array39['className'] = $renderingContext->getVariableProvider()->getByPath('className');
$array39['view'] = 'list';
$arguments37['arguments'] = $array39;

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
					';
return $output36;
};
$arguments34 = [];
$arguments34['each'] = NULL;
$arguments34['as'] = NULL;
$arguments34['key'] = NULL;
$arguments34['reverse'] = false;
$arguments34['iteration'] = NULL;
$arguments34['each'] = $renderingContext->getVariableProvider()->getByPath('news');
$arguments34['as'] = 'newsItem';

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output28 .= '
				';
return $output28;
};
$arguments26 = [];

$output25 .= '';

$output25 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
$output42 = '';

$output42 .= '
					<div class="no-news-found">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};
$arguments43 = [];
$arguments43['key'] = NULL;
$arguments43['id'] = NULL;
$arguments43['default'] = NULL;
$arguments43['arguments'] = NULL;
$arguments43['extensionName'] = NULL;
$arguments43['languageKey'] = NULL;
$arguments43['alternativeLanguageKeys'] = NULL;
$arguments43['key'] = 'search-noresult';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output42 .= '
					</div>
				';
return $output42;
};
$arguments40 = [];
$arguments40['if'] = NULL;

$output25 .= '';

$output25 .= '
			';
return $output25;
};
$arguments6 = [];
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = [];
$array23['0'] = $renderingContext->getVariableProvider()->getByPath('news');

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments6['__thenClosure'] = function() use ($renderingContext) {
$output8 = '';

$output8 .= '
					<div class="count-msg">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};
$arguments9 = [];
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['languageKey'] = NULL;
$arguments9['alternativeLanguageKeys'] = NULL;
$arguments9['key'] = 'search-text';
// Rendering Array
$array11 = [];
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};
$arguments12 = [];
$arguments12['subject'] = NULL;
$arguments12['subject'] = $renderingContext->getVariableProvider()->getByPath('news');
$renderChildrenClosure13 = ($arguments12['subject'] !== null) ? function() use ($arguments12) { return $arguments12['subject']; } : $renderChildrenClosure13;$array11['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
$array11['1'] = $renderingContext->getVariableProvider()->getByPath('search.subject');
$arguments9['arguments'] = $array11;

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output8 .= '
					</div>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
$output16 = '';

$output16 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};
$arguments17 = [];
$arguments17['section'] = NULL;
$arguments17['partial'] = NULL;
$arguments17['delegate'] = NULL;
$arguments17['renderable'] = NULL;
$arguments17['arguments'] = array (
);
$arguments17['optional'] = false;
$arguments17['default'] = NULL;
$arguments17['contentAs'] = NULL;
$arguments17['debug'] = true;
$arguments17['partial'] = 'List/Blog';
// Rendering Array
$array19 = [];
$array19['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array19['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array19['className'] = $renderingContext->getVariableProvider()->getByPath('className');
$array19['view'] = 'list';
$arguments17['arguments'] = $array19;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
					';
return $output16;
};
$arguments14 = [];
$arguments14['each'] = NULL;
$arguments14['as'] = NULL;
$arguments14['key'] = NULL;
$arguments14['reverse'] = false;
$arguments14['iteration'] = NULL;
$arguments14['each'] = $renderingContext->getVariableProvider()->getByPath('news');
$arguments14['as'] = 'newsItem';

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output8 .= '
				';
return $output8;
};
$arguments6['__elseClosures'][] = function() use ($renderingContext) {
$output20 = '';

$output20 .= '
					<div class="no-news-found">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};
$arguments21 = [];
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['languageKey'] = NULL;
$arguments21['alternativeLanguageKeys'] = NULL;
$arguments21['key'] = 'search-noresult';

$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output20 .= '
					</div>
				';
return $output20;
};

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
		';
return $output5;
};
$arguments1 = [];
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = [];
$array3['0'] = $renderingContext->getVariableProvider()->getByPath('search');

$expression4 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression4(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output45 = '';

$output45 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};
$arguments46 = [];
$arguments46['name'] = NULL;
$arguments46['name'] = 'General';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, ['']);

$output45 .= '
<!--
	=====================
		Templates/News/SearchResult.html
-->

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
$output50 = '';

$output50 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
$output55 = '';

$output55 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
$output75 = '';

$output75 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
$output78 = '';

$output78 .= '
					<div class="count-msg">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure80 = function() use ($renderingContext) {
return NULL;
};
$arguments79 = [];
$arguments79['key'] = NULL;
$arguments79['id'] = NULL;
$arguments79['default'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['extensionName'] = NULL;
$arguments79['languageKey'] = NULL;
$arguments79['alternativeLanguageKeys'] = NULL;
$arguments79['key'] = 'search-text';
// Rendering Array
$array81 = [];
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure83 = function() use ($renderingContext) {
return NULL;
};
$arguments82 = [];
$arguments82['subject'] = NULL;
$arguments82['subject'] = $renderingContext->getVariableProvider()->getByPath('news');
$renderChildrenClosure83 = ($arguments82['subject'] !== null) ? function() use ($arguments82) { return $arguments82['subject']; } : $renderChildrenClosure83;$array81['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);
$array81['1'] = $renderingContext->getVariableProvider()->getByPath('search.subject');
$arguments79['arguments'] = $array81;

$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext)]);

$output78 .= '
					</div>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure85 = function() use ($renderingContext) {
$output86 = '';

$output86 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure88 = function() use ($renderingContext) {
return NULL;
};
$arguments87 = [];
$arguments87['section'] = NULL;
$arguments87['partial'] = NULL;
$arguments87['delegate'] = NULL;
$arguments87['renderable'] = NULL;
$arguments87['arguments'] = array (
);
$arguments87['optional'] = false;
$arguments87['default'] = NULL;
$arguments87['contentAs'] = NULL;
$arguments87['debug'] = true;
$arguments87['partial'] = 'List/Blog';
// Rendering Array
$array89 = [];
$array89['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array89['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array89['className'] = $renderingContext->getVariableProvider()->getByPath('className');
$array89['view'] = 'list';
$arguments87['arguments'] = $array89;

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '
					';
return $output86;
};
$arguments84 = [];
$arguments84['each'] = NULL;
$arguments84['as'] = NULL;
$arguments84['key'] = NULL;
$arguments84['reverse'] = false;
$arguments84['iteration'] = NULL;
$arguments84['each'] = $renderingContext->getVariableProvider()->getByPath('news');
$arguments84['as'] = 'newsItem';

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output78 .= '
				';
return $output78;
};
$arguments76 = [];

$output75 .= '';

$output75 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure91 = function() use ($renderingContext) {
$output92 = '';

$output92 .= '
					<div class="no-news-found">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
return NULL;
};
$arguments93 = [];
$arguments93['key'] = NULL;
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$arguments93['languageKey'] = NULL;
$arguments93['alternativeLanguageKeys'] = NULL;
$arguments93['key'] = 'search-noresult';

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);

$output92 .= '
					</div>
				';
return $output92;
};
$arguments90 = [];
$arguments90['if'] = NULL;

$output75 .= '';

$output75 .= '
			';
return $output75;
};
$arguments56 = [];
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$arguments56['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = [];
$array73['0'] = $renderingContext->getVariableProvider()->getByPath('news');

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments56['__thenClosure'] = function() use ($renderingContext) {
$output58 = '';

$output58 .= '
					<div class="count-msg">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return NULL;
};
$arguments59 = [];
$arguments59['key'] = NULL;
$arguments59['id'] = NULL;
$arguments59['default'] = NULL;
$arguments59['arguments'] = NULL;
$arguments59['extensionName'] = NULL;
$arguments59['languageKey'] = NULL;
$arguments59['alternativeLanguageKeys'] = NULL;
$arguments59['key'] = 'search-text';
// Rendering Array
$array61 = [];
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
return NULL;
};
$arguments62 = [];
$arguments62['subject'] = NULL;
$arguments62['subject'] = $renderingContext->getVariableProvider()->getByPath('news');
$renderChildrenClosure63 = ($arguments62['subject'] !== null) ? function() use ($arguments62) { return $arguments62['subject']; } : $renderChildrenClosure63;$array61['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);
$array61['1'] = $renderingContext->getVariableProvider()->getByPath('search.subject');
$arguments59['arguments'] = $array61;

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output58 .= '
					</div>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
$output66 = '';

$output66 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
return NULL;
};
$arguments67 = [];
$arguments67['section'] = NULL;
$arguments67['partial'] = NULL;
$arguments67['delegate'] = NULL;
$arguments67['renderable'] = NULL;
$arguments67['arguments'] = array (
);
$arguments67['optional'] = false;
$arguments67['default'] = NULL;
$arguments67['contentAs'] = NULL;
$arguments67['debug'] = true;
$arguments67['partial'] = 'List/Blog';
// Rendering Array
$array69 = [];
$array69['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$array69['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array69['className'] = $renderingContext->getVariableProvider()->getByPath('className');
$array69['view'] = 'list';
$arguments67['arguments'] = $array69;

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
					';
return $output66;
};
$arguments64 = [];
$arguments64['each'] = NULL;
$arguments64['as'] = NULL;
$arguments64['key'] = NULL;
$arguments64['reverse'] = false;
$arguments64['iteration'] = NULL;
$arguments64['each'] = $renderingContext->getVariableProvider()->getByPath('news');
$arguments64['as'] = 'newsItem';

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output58 .= '
				';
return $output58;
};
$arguments56['__elseClosures'][] = function() use ($renderingContext) {
$output70 = '';

$output70 .= '
					<div class="no-news-found">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
return NULL;
};
$arguments71 = [];
$arguments71['key'] = NULL;
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['languageKey'] = NULL;
$arguments71['alternativeLanguageKeys'] = NULL;
$arguments71['key'] = 'search-noresult';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output70 .= '
					</div>
				';
return $output70;
};

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
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
$array53['0'] = $renderingContext->getVariableProvider()->getByPath('search');

$expression54 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = $renderChildrenClosure52;

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
';
return $output50;
};
$arguments48 = [];
$arguments48['name'] = NULL;
$arguments48['name'] = 'content';

$output45 .= '';

$output45 .= '
';

return $output45;
}


}
#