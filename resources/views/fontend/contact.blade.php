{!! Form::open(array('url' => '/contact')) !!}
   <table>
      <tr>
         <td>{!! Form::label('name', 'Họ và tên') !!}</td>
         <td>{!! Form::text('name', isset($name)?$name:'') !!}</td>
      </tr>

      <tr>
         <td>{!! Form::label('email', 'Địa chỉ Email') !!}</td>
         <td>{!! Form::email('email', isset($email)?$email:'') !!}</td>
      </tr>

      <tr>
         <td>{!! Form::label('title', 'Tiêu đề') !!}</td>
         <td>{!! Form::text('title', '') !!}</td>
      </tr>

      <tr>
         <td>{!! Form::label('content', 'Nội dung') !!}</td>
         <td>
            {!! Form::textarea('title', '', array('rows' => '3', 'cols' => '100')) !!}
         </td>
      </tr>

      <tr>
         <td colspan = "2" align = "center">
            {!! Form::submit('Gửi') !!}
         </td>
      </tr>
   </table>
{!! Form::close() !!}