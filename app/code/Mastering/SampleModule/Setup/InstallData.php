<?php
/**
 * project - InstallData.php
 *
 * Initial Version By: kangarooing
 * Initial Version Created On: 06/02/22 11:38 PM
 */

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('mastering_sample_item'),
            [
                'name' => 'Item 1'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('mastering_sample_item'),
            [
                'name' => 'Item 2'
            ]
        );

        $setup->endSetup();
    }
}
