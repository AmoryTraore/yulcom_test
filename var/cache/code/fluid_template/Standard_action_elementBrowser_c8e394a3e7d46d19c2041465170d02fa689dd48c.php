<?php

class Standard_action_elementBrowser_c8e394a3e7d46d19c2041465170d02fa689dd48c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
return NULL;
};
$arguments113 = [];
$arguments113['then'] = NULL;
$arguments113['else'] = NULL;
$arguments113['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array115 = [];
$array115['0'] = $renderingContext->getVariableProvider()->getByPath('treeEnabled');

$expression116 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments113['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array115)
					),
					$renderingContext
				);
$arguments113['then'] = 'ElementBrowserWithNavigation';
$arguments113['else'] = 'ElementBrowser';

return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);
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
 * section Navigation
 */
public function section_cf03cf2e9cdf95a20af09137dfb9071db0c31bf2(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output22 = '';

$output22 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
$output25 = '';

$output25 .= '
            <div class="element-browser-body">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('tree');
};
$arguments26 = [];
$arguments26['value'] = NULL;

$output25 .= isset($arguments26['value']) ? $arguments26['value'] : $renderChildrenClosure27();

$output25 .= '
            </div>
        ';
return $output25;
};
$arguments23 = [];

$output22 .= '';

$output22 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
$output32 = '';

$output32 .= '
            <typo3-backend-component-page-browser
                class="scaffold-content-navigation-component"
                tree-actions="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('treeActions');
};
$arguments33 = [];
$arguments33['value'] = NULL;
$arguments33['forceObject'] = false;
$renderChildrenClosure34 = ($arguments33['value'] !== null) ? function() use ($arguments33) { return $arguments33['value']; } : $renderChildrenClosure34;
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output32 .= '"
                active-page="';

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('activePage')]);

$output32 .= '">
            </typo3-backend-component-page-browser>
        ';
return $output32;
};
$arguments28 = [];
$arguments28['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array30 = [];
$array30['0'] = $renderingContext->getVariableProvider()->getByPath('treeType');
$array30['1'] = ' == \'page\'';

$expression31 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'page');};
$arguments28['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);

$output22 .= '';

$output22 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
$output39 = '';

$output39 .= '
            <typo3-backend-component-filestorage-browser
                class="scaffold-content-navigation-component"
                active-folder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return NULL;
};
$arguments42 = [];
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$arguments42['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array44 = [];
$array44['0'] = $renderingContext->getVariableProvider()->getByPath('activeFolder');

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments42['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)
					),
					$renderingContext
				);
$arguments42['then'] = $renderingContext->getVariableProvider()->getByPath('activeFolder.combinedIdentifier');
$arguments42['else'] = '';
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);
};
$arguments40 = [];
$arguments40['value'] = NULL;
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = NULL;
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = ($arguments40['value'] !== null) ? function() use ($arguments40) { return $arguments40['value']; } : $renderChildrenClosure41;
$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '"
            >
            </typo3-backend-component-filestorage-browser>
        ';
return $output39;
};
$arguments35 = [];
$arguments35['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array37 = [];
$array37['0'] = $renderingContext->getVariableProvider()->getByPath('treeType');
$array37['1'] = ' == \'folder\'';

$expression38 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'folder');};
$arguments35['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)
					),
					$renderingContext
				);

$output22 .= '';

$output22 .= '
    ';
return $output22;
};
$arguments1 = [];
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = [];
$array20['0'] = $renderingContext->getVariableProvider()->getByPath('tree');

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
            <div class="element-browser-body">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('tree');
};
$arguments4 = [];
$arguments4['value'] = NULL;

$output3 .= isset($arguments4['value']) ? $arguments4['value'] : $renderChildrenClosure5();

$output3 .= '
            </div>
        ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext) {
$output6 = '';

$output6 .= '
            <typo3-backend-component-page-browser
                class="scaffold-content-navigation-component"
                tree-actions="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('treeActions');
};
$arguments7 = [];
$arguments7['value'] = NULL;
$arguments7['forceObject'] = false;
$renderChildrenClosure8 = ($arguments7['value'] !== null) ? function() use ($arguments7) { return $arguments7['value']; } : $renderChildrenClosure8;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '"
                active-page="';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('activePage')]);

$output6 .= '">
            </typo3-backend-component-page-browser>
        ';
return $output6;
};
$arguments1['__elseifClosures'][] = function() use ($renderingContext) {
// Rendering Boolean node
// Rendering Array
$array9 = [];
$array9['0'] = $renderingContext->getVariableProvider()->getByPath('treeType');
$array9['1'] = ' == \'page\'';

$expression10 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'page');};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression10(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
};
$arguments1['__elseClosures'][] = function() use ($renderingContext) {
$output11 = '';

$output11 .= '
            <typo3-backend-component-filestorage-browser
                class="scaffold-content-navigation-component"
                active-folder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};
$arguments14 = [];
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = [];
$array16['0'] = $renderingContext->getVariableProvider()->getByPath('activeFolder');

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['then'] = $renderingContext->getVariableProvider()->getByPath('activeFolder.combinedIdentifier');
$arguments14['else'] = '';
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
};
$arguments12 = [];
$arguments12['value'] = NULL;
$arguments12['keepQuotes'] = false;
$arguments12['encoding'] = NULL;
$arguments12['doubleEncode'] = true;
$renderChildrenClosure13 = ($arguments12['value'] !== null) ? function() use ($arguments12) { return $arguments12['value']; } : $renderChildrenClosure13;
$output11 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '"
            >
            </typo3-backend-component-filestorage-browser>
        ';
return $output11;
};
$arguments1['__elseifClosures'][] = function() use ($renderingContext) {
// Rendering Boolean node
// Rendering Array
$array18 = [];
$array18['0'] = $renderingContext->getVariableProvider()->getByPath('treeType');
$array18['1'] = ' == \'folder\'';

$expression19 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'folder');};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output46 = '';

$output46 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};
$arguments47 = [];
$arguments47['queueIdentifier'] = NULL;
$arguments47['as'] = NULL;
$arguments47['queueIdentifier'] = $renderingContext->getVariableProvider()->getByPath('flashMessageQueueIdentifier');

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('content');
};
$arguments49 = [];
$arguments49['value'] = NULL;

$output46 .= isset($arguments49['value']) ? $arguments49['value'] : $renderChildrenClosure50();

$output46 .= '
';

return $output46;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output51 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};
$arguments52 = [];
$arguments52['name'] = NULL;
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
$array56['0'] = $renderingContext->getVariableProvider()->getByPath('treeEnabled');

$expression57 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments54['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression57(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)
					),
					$renderingContext
				);
$arguments54['then'] = 'ElementBrowserWithNavigation';
$arguments54['else'] = 'ElementBrowser';
$arguments52['name'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, ['']);

$output51 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
$output60 = '';

$output60 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
$output82 = '';

$output82 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
$output85 = '';

$output85 .= '
            <div class="element-browser-body">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure87 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('tree');
};
$arguments86 = [];
$arguments86['value'] = NULL;

$output85 .= isset($arguments86['value']) ? $arguments86['value'] : $renderChildrenClosure87();

$output85 .= '
            </div>
        ';
return $output85;
};
$arguments83 = [];

$output82 .= '';

$output82 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure89 = function() use ($renderingContext) {
$output92 = '';

$output92 .= '
            <typo3-backend-component-page-browser
                class="scaffold-content-navigation-component"
                tree-actions="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('treeActions');
};
$arguments93 = [];
$arguments93['value'] = NULL;
$arguments93['forceObject'] = false;
$renderChildrenClosure94 = ($arguments93['value'] !== null) ? function() use ($arguments93) { return $arguments93['value']; } : $renderChildrenClosure94;
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);

$output92 .= '"
                active-page="';

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('activePage')]);

$output92 .= '">
            </typo3-backend-component-page-browser>
        ';
return $output92;
};
$arguments88 = [];
$arguments88['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array90 = [];
$array90['0'] = $renderingContext->getVariableProvider()->getByPath('treeType');
$array90['1'] = ' == \'page\'';

$expression91 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'page');};
$arguments88['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);

$output82 .= '';

$output82 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure96 = function() use ($renderingContext) {
$output99 = '';

$output99 .= '
            <typo3-backend-component-filestorage-browser
                class="scaffold-content-navigation-component"
                active-folder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure101 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure103 = function() use ($renderingContext) {
return NULL;
};
$arguments102 = [];
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$arguments102['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array104 = [];
$array104['0'] = $renderingContext->getVariableProvider()->getByPath('activeFolder');

$expression105 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments102['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)
					),
					$renderingContext
				);
$arguments102['then'] = $renderingContext->getVariableProvider()->getByPath('activeFolder.combinedIdentifier');
$arguments102['else'] = '';
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);
};
$arguments100 = [];
$arguments100['value'] = NULL;
$arguments100['keepQuotes'] = false;
$arguments100['encoding'] = NULL;
$arguments100['doubleEncode'] = true;
$renderChildrenClosure101 = ($arguments100['value'] !== null) ? function() use ($arguments100) { return $arguments100['value']; } : $renderChildrenClosure101;
$output99 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '"
            >
            </typo3-backend-component-filestorage-browser>
        ';
return $output99;
};
$arguments95 = [];
$arguments95['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array97 = [];
$array97['0'] = $renderingContext->getVariableProvider()->getByPath('treeType');
$array97['1'] = ' == \'folder\'';

$expression98 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'folder');};
$arguments95['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);

$output82 .= '';

$output82 .= '
    ';
return $output82;
};
$arguments61 = [];
$arguments61['then'] = NULL;
$arguments61['else'] = NULL;
$arguments61['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array80 = [];
$array80['0'] = $renderingContext->getVariableProvider()->getByPath('tree');

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments61['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);
$arguments61['__thenClosure'] = function() use ($renderingContext) {
$output63 = '';

$output63 .= '
            <div class="element-browser-body">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('tree');
};
$arguments64 = [];
$arguments64['value'] = NULL;

$output63 .= isset($arguments64['value']) ? $arguments64['value'] : $renderChildrenClosure65();

$output63 .= '
            </div>
        ';
return $output63;
};
$arguments61['__elseClosures'][] = function() use ($renderingContext) {
$output66 = '';

$output66 .= '
            <typo3-backend-component-page-browser
                class="scaffold-content-navigation-component"
                tree-actions="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('treeActions');
};
$arguments67 = [];
$arguments67['value'] = NULL;
$arguments67['forceObject'] = false;
$renderChildrenClosure68 = ($arguments67['value'] !== null) ? function() use ($arguments67) { return $arguments67['value']; } : $renderChildrenClosure68;
$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output66 .= '"
                active-page="';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('activePage')]);

$output66 .= '">
            </typo3-backend-component-page-browser>
        ';
return $output66;
};
$arguments61['__elseifClosures'][] = function() use ($renderingContext) {
// Rendering Boolean node
// Rendering Array
$array69 = [];
$array69['0'] = $renderingContext->getVariableProvider()->getByPath('treeType');
$array69['1'] = ' == \'page\'';

$expression70 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'page');};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
};
$arguments61['__elseClosures'][] = function() use ($renderingContext) {
$output71 = '';

$output71 .= '
            <typo3-backend-component-filestorage-browser
                class="scaffold-content-navigation-component"
                active-folder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure73 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext) {
return NULL;
};
$arguments74 = [];
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$arguments74['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array76 = [];
$array76['0'] = $renderingContext->getVariableProvider()->getByPath('activeFolder');

$expression77 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments74['then'] = $renderingContext->getVariableProvider()->getByPath('activeFolder.combinedIdentifier');
$arguments74['else'] = '';
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);
};
$arguments72 = [];
$arguments72['value'] = NULL;
$arguments72['keepQuotes'] = false;
$arguments72['encoding'] = NULL;
$arguments72['doubleEncode'] = true;
$renderChildrenClosure73 = ($arguments72['value'] !== null) ? function() use ($arguments72) { return $arguments72['value']; } : $renderChildrenClosure73;
$output71 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '"
            >
            </typo3-backend-component-filestorage-browser>
        ';
return $output71;
};
$arguments61['__elseifClosures'][] = function() use ($renderingContext) {
// Rendering Boolean node
// Rendering Array
$array78 = [];
$array78['0'] = $renderingContext->getVariableProvider()->getByPath('treeType');
$array78['1'] = ' == \'folder\'';

$expression79 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'folder');};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression79(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)
					),
					$renderingContext
				);
};

$output60 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
';
return $output60;
};
$arguments58 = [];
$arguments58['name'] = NULL;
$arguments58['name'] = 'Navigation';

$output51 .= '';

$output51 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure107 = function() use ($renderingContext) {
$output108 = '';

$output108 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure110 = function() use ($renderingContext) {
return NULL;
};
$arguments109 = [];
$arguments109['queueIdentifier'] = NULL;
$arguments109['as'] = NULL;
$arguments109['queueIdentifier'] = $renderingContext->getVariableProvider()->getByPath('flashMessageQueueIdentifier');

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure112 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('content');
};
$arguments111 = [];
$arguments111['value'] = NULL;

$output108 .= isset($arguments111['value']) ? $arguments111['value'] : $renderChildrenClosure112();

$output108 .= '
';
return $output108;
};
$arguments106 = [];
$arguments106['name'] = NULL;
$arguments106['name'] = 'Content';

$output51 .= '';

$output51 .= '
';

return $output51;
}


}
#