            <div class="form-group">
                <label for="crud_attribute_name">crud_attribute_label</label>
                <select name="crud_attribute_name" id="crud_attribute_name" class="form-control">
                    <option value=""></option>
                    @foreach ($options as $option)
                        <option value="{{ $option }}">{{ $option }}</option>
                    @endforeach
                </select>
            </div>
