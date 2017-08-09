<?php
namespace Microsoft\Azure\Management\Automation;
final class Statistics
{
    /**
     * @param \Microsoft\Rest\ClientInterface $_client
     */
    public function __construct(\Microsoft\Rest\ClientInterface $_client)
    {
        $this->_ListByAutomationAccount_operation = $_client->createOperation('Statistics_ListByAutomationAccount');
    }
    /**
     * Retrieve the statistics for the account.
     * @param string $resourceGroupName
     * @param string $automationAccountName
     * @param string|null $_filter
     * @return array
     */
    public function listByAutomationAccount(
        $resourceGroupName,
        $automationAccountName,
        $_filter = null
    )
    {
        return $this->_ListByAutomationAccount_operation->call([
            'resourceGroupName' => $resourceGroupName,
            'automationAccountName' => $automationAccountName,
            '$filter' => $_filter
        ]);
    }
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_ListByAutomationAccount_operation;
}
