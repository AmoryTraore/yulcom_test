<?php

class Standard_action_generic_bf27ec53320da3a5441d243cc82dc044640f626d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
return (string) 'Default';
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
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return 'This templates is used to provide nessesary functionality for external processed content and could be used across multiple sources, for example the frontend login content element.';
};
$arguments1 = [];

$output0 .= '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
$output12 = '';

$output12 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('content');
};
$arguments15 = [];
$arguments15['value'] = NULL;
return isset($arguments15['value']) ? $arguments15['value'] : $renderChildrenClosure16();
};
$arguments13 = [];

$output12 .= '';

$output12 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};
$arguments19 = [];
$arguments19['data'] = NULL;
$arguments19['typoscriptObjectPath'] = NULL;
$arguments19['currentValueKey'] = NULL;
$arguments19['table'] = '';
$output21 = '';

$output21 .= 'tt_content.';

$output21 .= $renderingContext->getVariableProvider()->getByPath('data.CType');

$output21 .= '.20';
$arguments19['typoscriptObjectPath'] = $output21;
$arguments19['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$arguments19['table'] = 'tt_content';
$renderChildrenClosure20 = ($arguments19['data'] !== null) ? function() use ($arguments19) { return $arguments19['data']; } : $renderChildrenClosure20;return TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);
};
$arguments17 = [];
$arguments17['if'] = NULL;

$output12 .= '';

$output12 .= '
    ';
return $output12;
};
$arguments3 = [];
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array10 = [];
$array10['0'] = $renderingContext->getVariableProvider()->getByPath('content');

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('content');
};
$arguments5 = [];
$arguments5['value'] = NULL;
return isset($arguments5['value']) ? $arguments5['value'] : $renderChildrenClosure6();
};
$arguments3['__elseClosures'][] = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};
$arguments7 = [];
$arguments7['data'] = NULL;
$arguments7['typoscriptObjectPath'] = NULL;
$arguments7['currentValueKey'] = NULL;
$arguments7['table'] = '';
$output9 = '';

$output9 .= 'tt_content.';

$output9 .= $renderingContext->getVariableProvider()->getByPath('data.CType');

$output9 .= '.20';
$arguments7['typoscriptObjectPath'] = $output9;
$arguments7['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$arguments7['table'] = 'tt_content';
$renderChildrenClosure8 = ($arguments7['data'] !== null) ? function() use ($arguments7) { return $arguments7['data']; } : $renderChildrenClosure8;return TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output22 = '';

$output22 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return NULL;
};
$arguments23 = [];
$arguments23['name'] = NULL;
$arguments23['name'] = 'Default';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, ['']);

$output22 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
$output27 = '';

$output27 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return 'This templates is used to provide nessesary functionality for external processed content and could be used across multiple sources, for example the frontend login content element.';
};
$arguments28 = [];

$output27 .= '';

$output27 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
$output39 = '';

$output39 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('content');
};
$arguments42 = [];
$arguments42['value'] = NULL;
return isset($arguments42['value']) ? $arguments42['value'] : $renderChildrenClosure43();
};
$arguments40 = [];

$output39 .= '';

$output39 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};
$arguments46 = [];
$arguments46['data'] = NULL;
$arguments46['typoscriptObjectPath'] = NULL;
$arguments46['currentValueKey'] = NULL;
$arguments46['table'] = '';
$output48 = '';

$output48 .= 'tt_content.';

$output48 .= $renderingContext->getVariableProvider()->getByPath('data.CType');

$output48 .= '.20';
$arguments46['typoscriptObjectPath'] = $output48;
$arguments46['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$arguments46['table'] = 'tt_content';
$renderChildrenClosure47 = ($arguments46['data'] !== null) ? function() use ($arguments46) { return $arguments46['data']; } : $renderChildrenClosure47;return TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);
};
$arguments44 = [];
$arguments44['if'] = NULL;

$output39 .= '';

$output39 .= '
    ';
return $output39;
};
$arguments30 = [];
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$arguments30['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array37 = [];
$array37['0'] = $renderingContext->getVariableProvider()->getByPath('content');

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments30['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);
$arguments30['__thenClosure'] = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('content');
};
$arguments32 = [];
$arguments32['value'] = NULL;
return isset($arguments32['value']) ? $arguments32['value'] : $renderChildrenClosure33();
};
$arguments30['__elseClosures'][] = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};
$arguments34 = [];
$arguments34['data'] = NULL;
$arguments34['typoscriptObjectPath'] = NULL;
$arguments34['currentValueKey'] = NULL;
$arguments34['table'] = '';
$output36 = '';

$output36 .= 'tt_content.';

$output36 .= $renderingContext->getVariableProvider()->getByPath('data.CType');

$output36 .= '.20';
$arguments34['typoscriptObjectPath'] = $output36;
$arguments34['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$arguments34['table'] = 'tt_content';
$renderChildrenClosure35 = ($arguments34['data'] !== null) ? function() use ($arguments34) { return $arguments34['data']; } : $renderChildrenClosure35;return TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);
};

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output27 .= '

';
return $output27;
};
$arguments25 = [];
$arguments25['name'] = NULL;
$arguments25['name'] = 'Main';

$output22 .= '';

$output22 .= '

';

return $output22;
}


}
#