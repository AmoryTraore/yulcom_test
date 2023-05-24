<?php

class partial_ButtonBar_850b8d5bf1cd919bd399ab5e2e253c458bec40cf extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output0 = '';

$output0 .= '<div class="btn-toolbar" role="toolbar" aria-label="">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output19 = '';

$output19 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
$output22 = '';

$output22 .= '
                <div class="btn-group" role="group" aria-label="">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
$output25 = '';

$output25 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('button');
};
$arguments26 = [];
$arguments26['value'] = NULL;

$output25 .= isset($arguments26['value']) ? $arguments26['value'] : $renderChildrenClosure27();

$output25 .= '
                    ';
return $output25;
};
$arguments23 = [];
$arguments23['each'] = NULL;
$arguments23['as'] = NULL;
$arguments23['key'] = NULL;
$arguments23['reverse'] = false;
$arguments23['iteration'] = NULL;
$arguments23['each'] = $renderingContext->getVariableProvider()->getByPath('buttonGroup');
$arguments23['as'] = 'button';

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
                </div>
            ';
return $output22;
};
$arguments20 = [];

$output19 .= '';

$output19 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
$output30 = '';

$output30 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('buttonGroup.0');
};
$arguments31 = [];
$arguments31['value'] = NULL;

$output30 .= isset($arguments31['value']) ? $arguments31['value'] : $renderChildrenClosure32();

$output30 .= '
            ';
return $output30;
};
$arguments28 = [];
$arguments28['if'] = NULL;

$output19 .= '';

$output19 .= '
        ';
return $output19;
};
$arguments4 = [];
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = [];
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('buttonGroup');
};
$arguments16 = [];
$arguments16['subject'] = NULL;
$renderChildrenClosure17 = ($arguments16['subject'] !== null) ? function() use ($arguments16) { return $arguments16['subject']; } : $renderChildrenClosure17;$array15['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);
$array15['1'] = ' > 1';

$expression18 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext) {
$output6 = '';

$output6 .= '
                <div class="btn-group" role="group" aria-label="">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
$output9 = '';

$output9 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('button');
};
$arguments10 = [];
$arguments10['value'] = NULL;

$output9 .= isset($arguments10['value']) ? $arguments10['value'] : $renderChildrenClosure11();

$output9 .= '
                    ';
return $output9;
};
$arguments7 = [];
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('buttonGroup');
$arguments7['as'] = 'button';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
                </div>
            ';
return $output6;
};
$arguments4['__elseClosures'][] = function() use ($renderingContext) {
$output12 = '';

$output12 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('buttonGroup.0');
};
$arguments13 = [];
$arguments13['value'] = NULL;

$output12 .= isset($arguments13['value']) ? $arguments13['value'] : $renderChildrenClosure14();

$output12 .= '
            ';
return $output12;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
    ';
return $output3;
};
$arguments1 = [];
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('buttons');
$arguments1['as'] = 'buttonGroup';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</div>
';

return $output0;
}


}
#