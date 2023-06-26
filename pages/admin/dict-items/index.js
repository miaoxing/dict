import {Table, TableProvider, CTableDeleteLink, useTable} from '@mxjs/a-table';
import {CEditLink, CNewBtn} from '@mxjs/a-clink';
import {Page, PageActions} from '@mxjs/a-page';
import {LinkActions} from '@mxjs/actions';
import {SearchForm, SearchItem, Select} from '@mxjs/a-form';
import {useEffect, useState} from 'react';
import api from '@mxjs/api';

const Index = () => {
  const [table] = useTable();

  const [dicts, setDicts] = useState([]);
  useEffect(() => {
    api.getMax('dicts').then(({ret}) => {
      setDicts(ret.data);
    });
  }, []);

  return (
    <Page>
      <TableProvider>
        <PageActions>
          <CNewBtn/>
        </PageActions>

        <SearchForm>
          <SearchItem label="字典" name={['search', 'dictId']} initialValue="">
            <Select options={dicts} labelKey="name" valueKey="id" all/>
          </SearchItem>
        </SearchForm>

        <Table
          tableApi={table}
          columns={[
            {
              title: '所属字典',
              dataIndex: ['dict', 'name'],
            },
            {
              title: '名称',
              dataIndex: 'name',
            },
            {
              title: '值',
              dataIndex: 'value',
            },
            {
              title: '顺序',
              dataIndex: 'sort',
              sorter: true,
            },
            {
              title: '修改时间',
              dataIndex: 'updatedAt',
            },
            {
              title: '操作',
              dataIndex: 'id',
              render: (id) => (
                <LinkActions>
                  <CEditLink id={id}/>
                  <CTableDeleteLink id={id}/>
                </LinkActions>
              ),
            },
          ]}
        />
      </TableProvider>
    </Page>
  );
};

export default Index;
