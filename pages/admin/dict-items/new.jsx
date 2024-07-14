/**
 * @share [id]/edit
 */
import { CListBtn } from '@mxjs/a-clink';
import { Page, PageActions } from '@mxjs/a-page';
import { Form, FormItem, FormAction, Select } from '@mxjs/a-form';
import { FormItemSort } from '@miaoxing/admin';
import { useEffect, useState } from 'react';
import api from '@mxjs/api';
import { Section } from '@mxjs/a-section';

const New = () => {
  const [carousels, setCarousels] = useState([]);
  useEffect(() => {
    api.getMax('dicts').then(({ret}) => {
      setCarousels(ret.data);
    });
  }, []);

  return (
    <Page>
      <PageActions>
        <CListBtn/>
      </PageActions>

      <Form>
        {({id}) => {
          return <>
            <Section>
              <FormItem label="所属字典" name="dictId" required>
                <Select options={carousels} labelKey="name" valueKey="id" firstLabel="请选择" firstValue=""/>
              </FormItem>

              <FormItem name="name" label="名称" required/>

              <FormItem name="value" label="值" type={id ? 'plain' : 'text'} required/>

              <FormItem name="remark" label="备注" type="textarea"/>

              <FormItemSort/>
            </Section>

            <FormAction/>
          </>;
        }}
      </Form>
    </Page>
  );
};

export default New;
