<?php
namespace Microsoft\Azure\Management\DataLake\Analytics;
final class DataLakeStoreAccounts
{
    /**
     * @param \Microsoft\Rest\ClientInterface $_client
     */
    public function __construct(\Microsoft\Rest\ClientInterface $_client)
    {
        $this->_Add_operation = $_client->createOperation('DataLakeStoreAccounts_Add');
        $this->_Delete_operation = $_client->createOperation('DataLakeStoreAccounts_Delete');
        $this->_Get_operation = $_client->createOperation('DataLakeStoreAccounts_Get');
        $this->_ListByAccount_operation = $_client->createOperation('DataLakeStoreAccounts_ListByAccount');
    }
    /**
     * Updates the specified Data Lake Analytics account to include the additional Data Lake Store account.
     * @param string $resourceGroupName
     * @param string $accountName
     * @param string $dataLakeStoreAccountName
     * @param array|null $parameters
     */
    public function add(
        $resourceGroupName,
        $accountName,
        $dataLakeStoreAccountName,
        array $parameters = null
    )
    {
        return $this->_Add_operation->call([
            'resourceGroupName' => $resourceGroupName,
            'accountName' => $accountName,
            'dataLakeStoreAccountName' => $dataLakeStoreAccountName,
            'parameters' => $parameters
        ]);
    }
    /**
     * Updates the Data Lake Analytics account specified to remove the specified Data Lake Store account.
     * @param string $resourceGroupName
     * @param string $accountName
     * @param string $dataLakeStoreAccountName
     */
    public function delete(
        $resourceGroupName,
        $accountName,
        $dataLakeStoreAccountName
    )
    {
        return $this->_Delete_operation->call([
            'resourceGroupName' => $resourceGroupName,
            'accountName' => $accountName,
            'dataLakeStoreAccountName' => $dataLakeStoreAccountName
        ]);
    }
    /**
     * Gets the specified Data Lake Store account details in the specified Data Lake Analytics account.
     * @param string $resourceGroupName
     * @param string $accountName
     * @param string $dataLakeStoreAccountName
     * @return array
     */
    public function get(
        $resourceGroupName,
        $accountName,
        $dataLakeStoreAccountName
    )
    {
        return $this->_Get_operation->call([
            'resourceGroupName' => $resourceGroupName,
            'accountName' => $accountName,
            'dataLakeStoreAccountName' => $dataLakeStoreAccountName
        ]);
    }
    /**
     * Gets the first page of Data Lake Store accounts linked to the specified Data Lake Analytics account. The response includes a link to the next page, if any.
     * @param string $resourceGroupName
     * @param string $accountName
     * @param string|null $_filter
     * @param integer|null $_top
     * @param integer|null $_skip
     * @param string|null $_select
     * @param string|null $_orderby
     * @param boolean|null $_count
     * @return array
     */
    public function listByAccount(
        $resourceGroupName,
        $accountName,
        $_filter = null,
        $_top = null,
        $_skip = null,
        $_select = null,
        $_orderby = null,
        $_count = null
    )
    {
        return $this->_ListByAccount_operation->call([
            'resourceGroupName' => $resourceGroupName,
            'accountName' => $accountName,
            '$filter' => $_filter,
            '$top' => $_top,
            '$skip' => $_skip,
            '$select' => $_select,
            '$orderby' => $_orderby,
            '$count' => $_count
        ]);
    }
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_Add_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_Delete_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_Get_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_ListByAccount_operation;
}
