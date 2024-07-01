import { Table, TableProvider, CTableDeleteLink, useTable, TableActions } from '@mxjs/a-table';
import {CEditLink, CNewBtn} from '@mxjs/a-clink';
import {Page, PageActions} from '@mxjs/a-page';
import {Link} from '@mxjs/router';
import $ from 'miaoxing';

const Index = () => {
  const [table] = useTable();

  return (
    <Page>
      <TableProvider>
        <PageActions>
          <CNewBtn/>
        </PageActions>

        <Table
          tableApi={table}
          columns={[
            {
              title: '名称',
              dataIndex: 'name',
            },
            {
              title: '标识',
              dataIndex: 'code',
            },
            {
              title: '修改时间',
              dataIndex: 'updatedAt',
            },
            {
              title: '操作',
              dataIndex: 'id',
              render: (id, item) => (
                <TableActions>
                  <Link to={$.url('admin/dict-items', {search: {dictId: id}})}>查看数据</Link>
                  <CEditLink id={id}/>
                  {!item.isBuiltIn && <CTableDeleteLink id={id}/>}
                </TableActions>
              ),
            },
          ]}
        />
      </TableProvider>
    </Page>
  );
};

export default Index;
